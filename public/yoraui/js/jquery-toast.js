'use strict';
// (function($) {

    const showSuccessToast = (message="Default Success Message", title="Success") => {
      resetToastPosition();
      $.toast({
        heading: title,
        text: message,
        showHideTransition: 'slide',
        icon: 'success',
        loaderBg: '#f96868',
        position: 'top-right',
        hideAfter : 10000,  
      })
    };

    const showInfoToast = (message="Default Info Message", title="Info") => {
      resetToastPosition();
      $.toast({
        heading: title,
        text: message,
        showHideTransition: 'slide',
        icon: 'info',
        loaderBg: '#46c35f',
        position: 'top-right',
        hideAfter : 10000,  
      })
    };

    const showWarningToast = (message="Default Warning Message", title="Warning") => {
      resetToastPosition();
      $.toast({
        heading: title,
        text: message,
        showHideTransition: 'slide',
        icon: 'warning',
        loaderBg: '#57c7d4',
        position: 'top-right',
        hideAfter : 10000,  
      })
    };

    const showDangerToast = (message="Default Danger Message", title="Danger") => {
      resetToastPosition();
      $.toast({
        heading: title,
        text: message,
        showHideTransition: 'slide',
        icon: 'error',
        loaderBg: '#f2a654',
        position: 'top-right',
        hideAfter : 10000,  
      })
    };

    const showToastPosition = (position) => {
      resetToastPosition();
      $.toast({
        heading: 'Positioning',
        text: 'Specify the custom position object or use one of the predefined ones',
        position: String(position),
        icon: 'info',
        stack: false,
        loaderBg: '#f96868'
      })
    }

    const showToastInCustomPosition = () => {
      resetToastPosition();
      $.toast({
        heading: 'Custom positioning',
        text: 'Specify the custom position object or use one of the predefined ones',
        icon: 'info',
        position: {
          left: 120,
          top: 120
        },
        stack: false,
        loaderBg: '#f96868'
      })
    }
    
    const resetToastPosition = () => {
      $('.jq-toast-wrap').removeClass('bottom-left bottom-right top-left top-right mid-center'); // to remove previous position class
      $(".jq-toast-wrap").css({
        "top": "",
        "left": "",
        "bottom": "",
        "right": ""
      }); //to remove previous position style
    }

//   })(jQuery);