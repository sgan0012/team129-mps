(function ($) {
    $.validator.addMethod('postcode',function(value,element,param) {
        $return = false;

        value = value.replace("-","");

        $(param).each(function(i){
            if ( value.substr(0, this.length) == this ) $return = true;
        });

        return $return;
    });
})(jQuery);
