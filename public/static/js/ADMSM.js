(function (root) {
    'use strict';

    var win = $(window),
        doc = $(document),
        html = $('html'),
        body = $('body');

    root.ADMSM = {
        // Variables
        html : html,
        win: win,
        doc: doc,
        body: body,

        // functions

        getKeyCode : function (e) {
            if (e !== undefined) {
                if (e.type === 'keypress') {
                    return (e.keyCode ? e.keyCode : e.which);
                }  else {
                    return '';
                }
            } else {
                return '';
            }
        },

        // Define and Initialized JS modules
        initFormElements: function (e) {
            $('.styled-checkbox').on('click', function(e){

                var that = $(this),
                    checkbox = $(that).find('input[type=checkbox]');

                console.log(checkbox);

                $(that).toggleClass('checked');
                checkbox.prop("checked", !checkbox.prop("checked"));
            });
        },

        init : function () {
            //Object init functions
        }
    };

}(window));
