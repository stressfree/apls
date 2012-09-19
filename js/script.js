(function ($) {

Drupal.behaviors.aplsHomepage = {
  attach: function (context, settings) {
        
        function nextSlide(){
            nextIndex = currentIndex + 1;
            if (nextIndex> $('body.node-type-homepage div.field-type-image div.field-item').length) {
                nextIndex =1;
            }
            $("'body.node-type-homepage div.field-type-image div.field-item:nth-child("+nextIndex+")'").addClass('show').animate({opacity: 1.0}, fadeDuration);
            $("'body.node-type-homepage div.field-type-image div.image-counter li:nth-child("+nextIndex+")'").children('a').animate({opacity: 1.0}, fadeDuration);
            $("'body.node-type-homepage div.field-type-image div.field-item:nth-child("+currentIndex+")'").animate({opacity: 0.0}, fadeDuration).removeClass('show');
            $("'body.node-type-homepage div.field-type-image div.image-counter li:nth-child("+currentIndex+")'").children('a').animate({opacity: 0.0}, fadeDuration);
            currentIndex = nextIndex;
        }
        
        var fadeDuration = 2000;
        var slideDuration = 15000;
        var currentIndex = 1;
        var nextIndex = 1;
        
        $('body.node-type-homepage div.field-type-image').append('<div class="image-counter"><ul></ul></div>');
        $('body.node-type-homepage div.field-type-image div.field-item').each(function(index, value) {
            $('body.node-type-homepage div.field-type-image div.image-counter ul').append('<li><a><!-- --></a></li>');
        });
                        
        $('body.node-type-homepage div.field-type-image div.field-item').css({opacity: 0.0});
        $('body.node-type-homepage div.field-type-image div.image-counter li a').css({opacity: 0.0});
        $("'body.node-type-homepage div.field-type-image div.field-item:nth-child("+nextIndex+")'").addClass('show').animate({opacity: 1.0}, fadeDuration);
        $("'body.node-type-homepage div.field-type-image div.image-counter li:nth-child("+nextIndex+")'").children('a').animate({opacity: 1.0}, fadeDuration);
        var timer = setInterval(nextSlide,slideDuration);
                
      }
};

Drupal.behaviors.aplsLogin = {
  attach: function (context, settings) {
        $('#block-user-login div.content').toggle();
        $('#block-user-login h2').click(function(e) {
            $('#block-user-login h2').toggleClass('selected');
            $('#block-user-login div.content').toggle();
        });
    }
};

Drupal.behaviors.aplsEventRegistration = {
    attach: function (context, settings) {
        var input = $('div.crm-event-register-form-block input#participant_note');
        
        if (input !== undefined) {
            var textarea = $('<textarea></textarea>').attr({
                id: 'participant_note',
                name: 'participant_note',
                value: $('div.crm-event-register-form-block input#participant_note').val()
            });
            input.after(textarea).remove();
        }
    }
};

}(jQuery));