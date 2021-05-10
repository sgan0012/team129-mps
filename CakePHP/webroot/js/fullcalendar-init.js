! function (e) {
    "use strict";
    var t = function () {
        this.$body = e("body"), this.$modal = e("#event-modal"), this.$event = "#external-events div.external-event", this.$calendar = e("#calendar"), this.$saveCategoryBtn = e(".save-category"), this.$categoryForm = e("#add-category form"), this.$extEvents = e("#external-events"), this.$calendarObj = null
    };
    t.prototype.onDrop = function (t, n) {
        var a = t.data("eventObject"),
            o = t.attr("data-class"),
            i = e.extend({}, a);
        i.start = n, o && (i.className = [o]), this.$calendar.fullCalendar("renderEvent", i, !0), e("#drop-remove").is(":checked") && t.remove()
    }, t.prototype.onEventClick = function (t, n, a) {
        console.log(t);
        if (t.type == "CalendarEvent") {
            // Specify the format you want
            let date_format = {};

            date_format.hour = 'numeric';
            date_format.minute = 'numeric';
            date_format.second = 'numeric';
            var o = this,
                i = e("<form></form>");
            i.append("<div class='col-md-12'><label class='control-label'>Event Title</label> <input class='form-control form-white' value='" + t.title2 + "' type='text' name='title' id='title'></div>"),
                i.append(" <div class='col-md-12'><label class='control-label'>Description</label><input class='form-control form-white' value='" + t.description + "' type='text' name='description' id='description'></div>"),
                i.append("<div class='col-md-12'>" +
                    "<label class='control-label'>Start - End Date</label>" +
                    "<div class='input-daterange input-group' id='date-range' style='padding-bottom: 30px;' >" +
                    "<input class='form-control' value='" + t.start_date.getDate() + "-" + (t.start_date.getMonth() + 1) + "-" + t.start_date.getFullYear() + "' type='text' name='start_date' id='start_date'>" +
                    "<span class='input-group-addon'>to</span>" +
                    "<input class='form-control' value='" + t.end_date.getDate() + "-" + (t.end_date.getMonth() + 1) + "-" + t.end_date.getFullYear() + "' type='text' name='end_date' id='end_date'>" +
                    "</div>" +
                    "<label class='control-label'>Start - End Time</label>" +
                    "<div class='input-group clockpicker' data-placement='bottom' data-align='top' data-autoclose='true'>" +
                    "<input class='form-control' value='" + t.start_time.toISOString().substring(11, 16) + "' type='text' name='start_time' id='start_time'>" +
                    "<span class='input-group-append'><span class='input-group-text'><i class='fa fa-clock-o'></i></span></span>" +
                    "<span class='input-group-addon'>to</span>" +
                    "<input class='form-control' value='" + t.end_time.toISOString().substring(11, 16)+ "' type='text' name='end_time' id='end_time'>" +
                    "<span class='input-group-append'><span class='input-group-text'><i class='fa fa-clock-o'></i></span></span>" +
                    "</div>" +
                    "</div>"),
                i.append("<div class='col-md-12 input-group'>"+
                                "<label class='control-label'>Reminder Date</label>"+
                                "<input class='form-control' id='datepicker-autoclose' value='" + t.reminder_date.getDate() + "-" + (t.reminder_date.getMonth() + 1) + "-" + t.reminder_date.getFullYear() + "' type='text' name='reminder_date'>" +
                                "<span class='input-group-append'><span class='input-group-text'><i class='mdi mdi-calendar-check'></i></span></span>"+
                            "</div>"),
                i.append("<div class='col-md-12'>"+
                            "<label class='control-label'>Category</label>"+
                            "<input class='form-control form-white'  type='text' name='category' value='" + t.category+"' id='category'>"+
                         "</div>"),
                i.append("<div class='col-md-6'>"+
                            "<label class='control-label'>Choose Category Color</label>"+
                            "<select class='form-control form-white' data-placeholder='Choose a color...' name='color_label' id='color_label'>"+
                                "<option value='success'"+(t.color_label=="success"?'selected':'')+">Red</option>"+
                                "<option value='danger'"+(t.color_label=="danger"?'selected':'')+">Danger</option>"+
                                "<option value='info'"+(t.color_label=="info"?'selected':'')+">Info</option>"+
                                "<option value='pink'"+(t.color_label=="pink"?'selected':'')+">Pink</option>"+
                                "<option value='primary'"+(t.color_label=="primary"?'selected':'')+">Primary</option>"+
                                "<option value='warning'"+(t.color_label=="warning"?'selected':'')+">Warning</option>"+
                                "</select>"+
                        "</div>"),

                o.$modal.modal({
                    backdrop: "static"
                }), o.$modal.find(".delete-event").show().end().find(".save-event").hide().end().find(".modal-body").empty().prepend(i).end().find(".delete-event").unbind("click").on("click", function () {
                    o.$calendarObj.fullCalendar("removeEvents", function (e) {
                        $.ajax({
                            type: 'POST',
                            url: window.location.href+ '/delete/'+t.event_id,
                            datatype: 'json',
                            success: function (result) {

                            }
                        });
                        return e._id == t._id
                    }), o.$modal.modal("hide")
                }),
                o.$modal.find(".edit-event").show().end().find(".save-event").hide().end().find(".modal-body").empty().prepend(i).end().find(".edit-event").unbind("click").on("click", function () {
                    let formData={
                        title:document.getElementById("title").value,
                        description:document.getElementById("description").value,
                        start_date:document.getElementById("start_date").value,
                        end_date:document.getElementById("end_date").value,
                        reminder_date:document.getElementById("datepicker-autoclose").value,
                        category:document.getElementById("category").value,
                        color_label:document.getElementById("color_label").value,
                        start_time:document.getElementById("start_time").value,
                        end_time:document.getElementById("end_time").value
                    };
                        console.log(formData);
                    $.ajax({
                        type: 'POST',
                        url: window.location.href+ '/edit/'+t.event_id,
                        data: formData,
                        datatype: 'json',
                        success: function (result) {
                            location.reload();
                        }
                    });
                })
                , o.$modal.find("form").on("submit", function () {
                    return t.title = i.find("input[type=text]").val(), o.$calendarObj.fullCalendar("updateEvent", t), o.$modal.modal("hide"), !1
                })
        }

    }
    // , t.prototype.onSelect = function (t, n, a) {
    //     var o = this;
    //     o.$modal.modal({
    //         backdrop: "static"
    //     });
    //     var i = e("<form></form>");
    //     i.append("<div class='row'></div>"), i.find(".row").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Event Name</label><input class='form-control' placeholder='Insert Event Name' type='text' name='title'/></div></div>").append("<div class='col-md-6'><div class='form-group'><label class='control-label'>Category</label><select class='form-control' name='category'></select></div></div>").find("select[name='category']").append("<option value='bg-danger'>Danger</option>").append("<option value='bg-success'>Success</option>").append("<option value='bg-dark'>Dark</option>").append("<option value='bg-primary'>Primary</option>").append("<option value='bg-pink'>Pink</option>").append("<option value='bg-info'>Info</option>").append("<option value='bg-warning'>Warning</option></div></div>"), o.$modal.find(".edit-event").hide(),o.$modal.find(".delete-event").hide().end().find(".save-event").show().end().find(".modal-body").empty().prepend(i).end().find(".save-event").unbind("click").on("click", function () {
    //         i.submit()
    //     }), o.$modal.find("form").on("submit", function () {
    //         var e = i.find("input[name='title']").val(),
    //             a = (i.find("input[name='beginning']").val(), i.find("input[name='ending']").val(), i.find("select[name='category'] option:checked").val());
    //         return null !== e && 0 != e.length ? (o.$calendarObj.fullCalendar("renderEvent", {
    //             title: e,
    //             start: t,
    //             end: n,
    //             allDay: !1,
    //             className: a
    //         }, !0), o.$modal.modal("hide")) : alert("You have to give a title to your event"), !1
    //     }), o.$calendarObj.fullCalendar("unselect")
    // }
    , t.prototype.enableDrag = function () {
        e(this.$event).each(function () {
            var t = {
                title: e.trim(e(this).text())
            };
            e(this).data("eventObject", t), e(this).draggable({
                zIndex: 999,
                revert: !0,
                revertDuration: 0
            })
        })
    }, t.prototype.init = function () {
        this.enableDrag();
        var t = new Date,
            n = (t.getDate(), t.getMonth(), t.getFullYear(), new Date(e.now())),
            a = [],
            o = this;
        $.ajax({
            type: 'POST',
            url: window.location.href+ '/getCalendarData',
            datatype: 'json',
            success: function (result) {
                console.log(JSON.parse(result));
                console.log(t);
                let data = JSON.parse(result);
                for (let i = 0; i < data["Agreement"].length; i++) {

                    a.push({ title: "Agreement ID " + data["Agreement"][i]["agreement_id"] + " reminder", start: new Date(data["Agreement"][i]["reminder"]), className: "bg-primary", type: "Agreement" });
                    a.push({ title: "Agreement ID " + data["Agreement"][i]["agreement_id"] + " due", start: new Date(data["Agreement"][i]["end_date"]), className: "bg-danger", type: "Agreement" });

                }
                for (let i = 0; i < data["Schedule"].length; i++) {

                    a.push({ title: "Schedule ID " + data["Schedule"][i]["schedule_id"] + " reminder", start: new Date(data["Schedule"][i]["reminder"]), className: "bg-primary", type: "Schedule" });
                    a.push({ title: "Schedule ID " + data["Schedule"][i]["schedule_id"] + " due", start: new Date(data["Schedule"][i]["end_date"]), className: "bg-danger", type: "Schedule" });

                }
                for (let i = 0; i < data["CalendarEvent"].length; i++) {

                    a.push({ title: data["CalendarEvent"][i]["title"] + " reminder", title2: data["CalendarEvent"][i]["title"],start: new Date(data["CalendarEvent"][i]["reminder_date"]), className: "bg-success", type: "CalendarEvent", event_id: data["CalendarEvent"][i]["event_id"], description: data["CalendarEvent"][i]["description"], start_date: new Date(data["CalendarEvent"][i]["start_date"]), end_date: new Date(data["CalendarEvent"][i]["end_date"]), reminder_date: new Date(data["CalendarEvent"][i]["reminder_date"]), category: data["CalendarEvent"][i]["category"], color_label: data["CalendarEvent"][i]["color_label"], start_time: new Date(data["CalendarEvent"][i]["start_time"]), end_time: new Date(data["CalendarEvent"][i]["end_time"]) });
                    a.push({ title: data["CalendarEvent"][i]["title"] + " start", title2: data["CalendarEvent"][i]["title"],start: new Date(data["CalendarEvent"][i]["start_date"]), className: "bg-success", type: "CalendarEvent", event_id: data["CalendarEvent"][i]["event_id"], description: data["CalendarEvent"][i]["description"], start_date: new Date(data["CalendarEvent"][i]["start_date"]), end_date: new Date(data["CalendarEvent"][i]["end_date"]), reminder_date: new Date(data["CalendarEvent"][i]["reminder_date"]), category: data["CalendarEvent"][i]["category"], color_label: data["CalendarEvent"][i]["color_label"], start_time: new Date(data["CalendarEvent"][i]["start_time"]), end_time: new Date(data["CalendarEvent"][i]["end_time"]) });
                    a.push({ title: data["CalendarEvent"][i]["title"] + " end", title2: data["CalendarEvent"][i]["title"],start: new Date(data["CalendarEvent"][i]["end_date"]), className: "bg-success", type: "CalendarEvent", event_id: data["CalendarEvent"][i]["event_id"], description: data["CalendarEvent"][i]["description"], start_date: new Date(data["CalendarEvent"][i]["start_date"]), end_date: new Date(data["CalendarEvent"][i]["end_date"]), reminder_date: new Date(data["CalendarEvent"][i]["reminder_date"]), category: data["CalendarEvent"][i]["category"], color_label: data["CalendarEvent"][i]["color_label"], start_time: new Date(data["CalendarEvent"][i]["start_time"]), end_time: new Date(data["CalendarEvent"][i]["end_time"]) });
                }
                console.log(a);
                o.$calendarObj = o.$calendar.fullCalendar({
                    slotDuration: "00:15:00",
                    minTime: "08:00:00",
                    maxTime: "19:00:00",
                    defaultView: "month",
                    handleWindowResize: !0,
                    height: e(window).height() - 200,
                    header: {
                        left: "prev,next today",
                        center: "title",
                        right: "month"
                    },
                    events: a,
                    editable: !0,
                    droppable: !0,
                    eventLimit: !0,
                    selectable: !0,
                    displayEventTime: false,
                    drop: function (t) {
                        o.onDrop(e(this), t)
                    },
                    select: function (e, t, n) {
                        o.onSelect(e, t, n)
                    },
                    eventClick: function (e, t, n) {
                        o.onEventClick(e, t, n)
                    }
                }), this.$saveCategoryBtn.on("click", function () {
                    var e = o.$categoryForm.find("input[name='category-name']").val(),
                        t = o.$categoryForm.find("select[name='category-color']").val();
                    null !== e && 0 != e.length && (o.$extEvents.append('<div class="external-event bg-' + t + '" data-class="bg-' + t + '" style="position: relative;"><i class="fa fa-move"></i>' + e + "</div>"), o.enableDrag())
                })
                // result is a JSON array of the returned Variables
            },
            error: function (result) {
                console.log(result);
            }
        });


    }, e.CalendarApp = new t, e.CalendarApp.Constructor = t
}(window.jQuery),
    function (e) {
        "use strict";
        e.CalendarApp.init()
    }(window.jQuery);
