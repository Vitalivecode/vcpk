localStorage.setItem('protect', 'false');
jQuery(document).on('click','.nav-link',function(){
    var $this = jQuery(this);
    var $id = $this.data('href');
    jQuery('.nav-link').removeClass('active');
    $this.addClass('active');
    jQuery('.tab-pane').removeClass('active');
    jQuery('.tab-pane').removeClass('show');
    jQuery('.tab-pane').removeClass('gdlr-core-active');
    jQuery('#' + $id).addClass('active');
    //jQuery('#' + $id).addClass('show');
    jQuery('#' + $id).addClass('gdlr-core-active');
    jQuery('.nav-item').removeClass('current-menu-item');
    jQuery('.gdlr-core-tab-item-title').removeClass('gdlr-core-active');
    $this.closest('.nav-item').addClass('current-menu-item');
    $this.closest('.gdlr-core-tab-item-title').addClass('gdlr-core-active');
});
    jQuery(document).on('click','#protect',function(){
        jQuery('#tab-2').find('#protect-data').html('');
        let text;
        let password = prompt("Please enter password:", "");
        if (password == null || password == "") {
            jQuery('#tab-2').find('#protect-data').html('<div class="alert alert-warning my-5">Please enter password</div>');
        } else {
            jQuery.ajax({
              type : 'GET',
              url : baseUrl + 'naac/dvv',
              dataType : 'html',
              data: { 'password': password },
              success : function(data){
                jQuery('#tab-2').find('#protect-data').html(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) {
                console.log(errorThrown);
              }
            });
        }
    });
    jQuery(document).on('click','.protect',function(){
        localStorage.setItem('protect', 'false');
        let password = prompt("Please enter password:", "");
        if(btoa(password) === "VmdzZWtAMTIzJA==")
        {
            localStorage.setItem('protect', 'true');
            return true;
        }
        else
        {
            return false;
        }
    });
    
    jQuery.fn.textWidth = function(){
        var html_org = jQuery(this).html();
        var html_calc = '<span>' + html_org + '</span>';
        jQuery(this).html(html_calc);
        var width = jQuery(this).find('span:first').width();
        jQuery(this).html(html_org);
        return width;
    };
    
    if(jQuery('.hod-name').length){
        jQuery(window).load(function() {
            var cw = jQuery('.hod-name').textWidth();
            jQuery('.hod_qual').css('width',cw);
        });
        jQuery(document).on('click','.hod_name',function(){
            var cw = jQuery('.hod-name').textWidth();
            jQuery('.hod_qual').css('width',cw);
        });
    };
    
    function testimonialsWidth() {
        var testimonials_width = jQuery('.testimonials').textWidth();
        var testimonials_card = jQuery('.testimonials .card');
        var testimonials_card_width = parseInt(testimonials_width)-parseInt(testimonials_card.css('padding'));
        testimonials_card.css('width',testimonials_card_width);
        
        var wrapper = document.querySelector('.wrapper');
        var indicators = [...document.querySelectorAll('.indicators button')];
        let currentTestimonial = 0;
        indicators.forEach((item, i) => {
            item.addEventListener('click', () => {
                indicators[currentTestimonial].classList.remove('active');
                wrapper.style.marginLeft = `-${100 * i}%`;
                item.classList.add('active');
                currentTestimonial = i;
            })
        });
    };
    if(jQuery('.testimonials .card').length){
        jQuery('.testimonials').removeClass('d-none');
        testimonialsWidth();
        jQuery(window).resize(function(){
            testimonialsWidth();
        });
    };
    jQuery(document).ready(function(){
        if(jQuery('.testimonials').length){
            jQuery('.testimonials button').each(function(i){
                var dis = jQuery(this);
                setTimeout(function(){
                    dis.trigger('click');
                }, 3000*i);
            });
        };
    });