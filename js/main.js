jQuery(document).ready(function ($) {

    var popupshow;
    var graciasanim;

    var activelink=0;
    var num_length;
    var terms = $('#terms').val();
    var activeURL=false;
    var hash = window.location.hash;
    var triangle = new TimelineMax({paused:true});
    var fields = new TimelineMax({paused:true});
    var fields_mobile = new TimelineMax({paused:true});
    var triangleactive = false;

    popupshow = new TimelineMax({paused:true});
    graciasanim = new TimelineMax({paused:true});
    home_1_1 = new TimelineMax({paused:true});
    home_1_1_1 = new TimelineMax({paused:true});
    home_1_2 = new TimelineMax({paused:true});
    home_1_3 = new TimelineMax({paused:true});
    home_1_4 = new TimelineMax({paused:true});
    home_1_5 = new TimelineMax({paused:true});
    home_1_6 = new TimelineMax({paused:true});
    home_1_7 = new TimelineMax({paused:true});
    home_1_7_1 = new TimelineMax({paused:true});
    home_1_7_2 = new TimelineMax({paused:true});
    home_1_8 = new TimelineMax({paused:true});
    home_1_9 = new TimelineMax({paused:true});
    home_1_10 = new TimelineMax({paused:true});
    home_1_11 = new TimelineMax({paused:true});
    home_1_12 = new TimelineMax({paused:true});
    home_1_13 = new TimelineMax({paused:true});

    home_auto = new TimelineMax({paused:true});
    home_auto_gana = new TimelineMax({paused:true});
    home_auto_ruedas = new TimelineMax({paused:true});


    home_auto_ruedas.to($('.auto-home .llanta-izq, .auto-home .llanta-der'), .35, { rotation: -360, repeat: -1, ease: Power0.easeNone });

    var posX;

    $(window).on('load', function () {

        if($(window).width()>=1920){
            posX = 779;
        }
        if($(window).width()>=980 && $(window).width()<1920 ){
            posX = parseInt(($(window).width() - 980)*.5+309);
        }
        home_auto.fromTo($('.auto-home'), 1.5, { left: $(window).width()+309, ease: Power2.easeOut }, { delay: 1, left: posX, ease: Power2.easeOut, onComplete: function () {
            home_auto_ruedas.pause();
        } } )

            .fromTo($('.auto-home .base-stars'), .5, { top: 21, ease: Power2.easeOut }, { top: 0, ease: Power2.easeOut } )
            .fromTo($('.auto-home .blue'), .5, { top: 24, ease: Power2.easeOut }, { top: 12, ease: Power2.easeOut } )
            .fromTo($('.auto-home .stars'), .5, { opacity: 0, ease: Power2.easeOut }, { opacity: 1, ease: Power2.easeOut } )
            .fromTo($('.auto-home .bright-stars'), .5, { opacity: 0, ease: Power2.easeOut }, { opacity: 1, ease: Power2.easeOut } )
            .fromTo($('.auto-home .bright-y'), .5, { opacity: 0, ease: Power2.easeOut }, { opacity: 1, ease: Power2.easeOut } )
            .to($('.auto-home .txt-neon'), .1, { opacity: .4, ease: Power2.easeOut } )
            .to($('.auto-home .txt-neon'), .1, { opacity: .1, ease: Power2.easeOut } )
            .to($('.auto-home .txt-neon'), .1, { opacity: .5, ease: Power2.easeOut } )
            .to($('.auto-homeauto-home .txt-neon'), .1, { opacity: .2, ease: Power2.easeOut } )
            .to($('.auto-home .light-on'), .1, { opacity: .2, ease: Power2.easeOut } )
            .to($('.auto-home .txt-neon'), .1, { opacity: .7, ease: Power2.easeOut } )
            .to($('.auto-home .txt-neon'), .1, { opacity: .2, ease: Power2.easeOut } )
            .to($('.auto-home .light-on'), .1, { opacity: .7, ease: Power2.easeOut } )
            .to($('.auto-home .txt-neon'), .5, { opacity: 1, ease: Power2.easeOut } )
            .to($('.auto-home .light-on'), .1, { opacity: .1, ease: Power2.easeOut } )
            .to($('.auto-home .light-on'), .1, { opacity: .8, ease: Power2.easeOut } )
            .to($('.auto-home .light-on'), .1, { opacity: .2, ease: Power2.easeOut } )
            .to($('.auto-home .light-on'), .1, { opacity: .6, ease: Power2.easeOut } )
            .to($('.auto-home .light-on'), .5, { opacity: 1, ease: Power2.easeOut } );

    });

    var fint = 0;

    function Focos(){
        var delayint;

        if(fint==0){
            delayint = 3;
        } else {
            delayint = 4.5;
        }
            home_auto_gana.to($('.auto .bright-gana'), .1, { delay: delayint, opacity: .1 , ease: Power2.easeOut } )
                .to($('.auto-home .bright-gana'), .1, { opacity: .6, ease: Power2.easeOut } )
                .to($('.auto-home .bright-gana'), .1, { opacity: .1, ease: Power2.easeOut } )
                .to($('.auto-home .bright-gana'), .1, { opacity: .7, ease: Power2.easeOut } )
                .to($('.auto-home .bright-gana'), .1, { opacity: .2, ease: Power2.easeOut } )
                .to($('.auto-home .bright-gana'), .2, { opacity: .8, ease: Power2.easeOut } )
                .to($('.auto-home .bright-gana'), .1, { opacity: .1, ease: Power2.easeOut } )
                .to($('.auto-home .bright-gana'), .5, { opacity: 1, ease: Power2.easeOut, onComplete: function () {
                    Focos();
                } } );

        fint++;

        home_auto_gana.play();
    }

    $(window).on('resize', function () {
        Resize();
    });

    function Resize(){
        if($(window).width()>=1920) {
            $('.auto-home').css('left', 779 + 'px');
        }
        if($(window).width()>=980 && $(window).width()<1920 ){
            $('.auto-home').css('left', parseInt(($(window).width() - 980)*.5+309) + 'px');
        }
        if($(window).width()>=1920){
            $('#inicio .bgsombra').css('left', parseInt( ($(window).width()-1920)*.5) + 'px' );
            $('#inicio .bgsombra').css('width', '1920px' );
        } else {
            $('#inicio .bgsombra').css('left', 0 );
            $('#inicio .bgsombra').css('width', '100%' );
        }
    }

    Resize();


    popupshow.fromTo($('.bg-form'), .35, { autoAlpha: 0, display:'none', ease: Power2.easeOut}, { autoAlpha: .8, display:'block', ease: Power2.easeOut});
    popupshow.to($('.form'), .5, { marginLeft: -123, ease: Power2.easeOut});
    popupshow.fromTo($('.form .close'), .15, { autoAlpha: 0, ease: Power2.easeOut}, { autoAlpha: 1, ease: Power2.easeOut});

    graciasanim.fromTo($('.form .envio'), .35, { autoAlpha: 1, display:'block', ease: Power2.easeOut}, { autoAlpha: 0,  display:'none', ease: Power2.easeOut});
    graciasanim.to($('.form .fields'), .35, { height: 260, ease: Power2.easeOut});
    graciasanim.fromTo($('.form .gracias'), .35, { autoAlpha: 0,  display:'none', ease: Power2.easeOut}, { autoAlpha: 1, display:'block', ease: Power2.easeOut});

    //HOME INTRO
    home_1_1.to($('.main .home .text'), .5, { opacity: 1, ease: Power2.easeOut});
    home_1_1_1.fromTo($('.main .form'), .75, { marginTop: -457, opacity: 0, ease: Power2.easeOut}, { delay: .5, marginTop: 0, opacity: 1, ease: Power2.easeOut});

    //HOME VER-VIDEO
    home_1_2.to($('.contenido .home .desc'), .5, { opacity: 1, ease: Power2.easeOut});
    home_1_2.to($('.contenido .home .video-player'), .5, { opacity: 1, ease: Power2.easeOut});

    //HOME QUE ES GPS SMART
    home_1_3.fromTo($('.contenido .home .led'), .5, { opacity: 0, marginTop: 170, ease: Back.easeOut}, { opacity: 1, marginTop: 0, ease: Back.easeOut});
    home_1_3.fromTo($('.contenido .home .led .on'), .1, { opacity: 0, ease: Power2.easeOut}, { opacity: .7, ease: Power2.easeOut});
    home_1_3.fromTo($('.contenido .home .led .on'), .1, { opacity: .1, ease: Power2.easeOut}, { opacity: .2, ease: Power2.easeOut});
    home_1_3.fromTo($('.contenido .home .led .on'), .1, { opacity: .2, ease: Power2.easeOut}, { opacity: .4, ease: Power2.easeOut});
    home_1_3.fromTo($('.contenido .home .led .on'), .1, { opacity: .4, ease: Power2.easeOut}, { opacity: .1, ease: Power2.easeOut});
    home_1_3.fromTo($('.contenido .home .led .on'), .1, { opacity: .1, ease: Power2.easeOut}, { opacity: .3, ease: Power2.easeOut});
    home_1_3.fromTo($('.contenido .home .led .on'), .7, { opacity: .3, ease: Power2.easeOut}, { opacity: 1, ease: Power2.easeOut});

    home_1_4.to($('.contenido .home .beneficios .block1'), .35, { opacity: 1, ease: Power2.easeOut});
    home_1_4.to($('.contenido .home .beneficios .left'), .3, { opacity: 1, ease: Power2.easeOut});
    home_1_4.to($('.contenido .home .beneficios .center'), .3, { opacity: 1, ease: Power2.easeOut});
    home_1_4.to($('.contenido .home .beneficios .right'), .3, { opacity: 1, ease: Power2.easeOut});

    home_1_6.fromTo($('.contenido .home .beneficios .left img'), .35, { opacity: 0, scaleX: 0, scaleY: 0,  ease: Back.easeOut}, { delay: .7, opacity: 1, scaleX: 1, scaleY: 1, ease: Back.easeOut});
    home_1_6.fromTo($('.contenido .main .home .beneficios .center img'), .35, { opacity: 0, scaleX: 0, scaleY: 0,  ease: Back.easeOut}, { opacity: 1, scaleX: 1, scaleY: 1, ease: Back.easeOut});
    home_1_6.fromTo($('.contenido .main .home .beneficios .right img'), .35, { opacity: 0, scaleX: 0, scaleY: 0,  ease: Back.easeOut}, { opacity: 1, scaleX: 1, scaleY: 1, ease: Back.easeOut});

    //HOME COMO OBTENGO MI NOTA
    home_1_7.fromTo($('.contenido  .home .led2'), .5, { opacity: 0, top: 170, ease: Back.easeOut}, { opacity: 1, top: 0, ease: Back.easeOut});
    home_1_7.fromTo($('.contenido .home .led2 .left'), .5, { opacity: 0, left: -400, ease: Power2.easeOut}, { opacity: 1, left: 0, ease: Power2.easeOut});
    home_1_7.fromTo($('.contenido .home .led2 .left img'), .35, { opacity: 0, scaleX: 0, scaleY: 0, ease: Power2.easeOut}, { opacity: 1, scaleX: 1, scaleY: 1, ease: Power2.easeOut});
    home_1_7.fromTo($('.contenido .home .led2 .right'), .5, { opacity: 0, right: -400, ease: Power2.easeOut}, { opacity: 1, right: 0, ease: Power2.easeOut});
    home_1_7.fromTo($('.contenido .home .led2 .on'), .1, { opacity: 0, ease: Power2.easeOut}, { opacity: .7, ease: Power2.easeOut});
    home_1_7.fromTo($('.contenido .home .led2 .on'), .1, { opacity: .1, ease: Power2.easeOut}, { opacity: .2, ease: Power2.easeOut});
    home_1_7.fromTo($('.contenido .home .led2 .on'), .1, { opacity: .2, ease: Power2.easeOut}, { opacity: .4, ease: Power2.easeOut});
    home_1_7.fromTo($('.contenido .home .led2 .on'), .1, { opacity: .4, ease: Power2.easeOut}, { opacity: .1, ease: Power2.easeOut});
    home_1_7.fromTo($('.contenido .home .led2 .on'), .1, { opacity: .1, ease: Power2.easeOut}, { opacity: .3, ease: Power2.easeOut});
    home_1_7.fromTo($('.contenido .home .led2 .on'), .7, { opacity: .3, ease: Power2.easeOut}, { opacity: 1, ease: Power2.easeOut});
    home_1_7_1.to($('.contenido .home .led2 .right .auto .izq'), .35, { rotation: -360, repeat: -1, ease: Power0.easeNone });
    home_1_7_2.to($('.contenido .home .led2 .right .auto .der'), .35, { rotation: -360, repeat: -1, ease: Power0.easeNone });

   // HOME LED3
    home_1_9.fromTo($('.contenido .home .led3'), .5, { opacity: 0, top: 170, ease: Back.easeOut}, { opacity: 1, top: 0, ease: Back.easeOut});
    home_1_9.fromTo($('.contenido .home .led3 .on'), .1, { opacity: 0, ease: Power2.easeOut}, { opacity: .7, ease: Power2.easeOut});
    home_1_9.fromTo($('.contenido .home .led3 .on'), .1, { opacity: .1, ease: Power2.easeOut}, { opacity: .2, ease: Power2.easeOut});
    home_1_9.fromTo($('.contenido .home .led3 .on'), .1, { opacity: .2, ease: Power2.easeOut}, { opacity: .4, ease: Power2.easeOut});
    home_1_9.fromTo($('.contenido .home .led3 .on'), .1, { opacity: .4, ease: Power2.easeOut}, { opacity: .1, ease: Power2.easeOut});
    home_1_9.fromTo($('.contenido .home .led3 .on'), .1, { opacity: .1, ease: Power2.easeOut}, { opacity: .3, ease: Power2.easeOut});
    home_1_9.fromTo($('.contenido .home .led3 .on'), .7, { opacity: .3, ease: Power2.easeOut}, { opacity: 1, ease: Power2.easeOut});
    home_1_9.fromTo($('.contenido .home .led3 .left'), .5, { opacity: 0, left: -400, ease: Power2.easeOut}, { opacity: 1, left: 0, ease: Power2.easeOut});
    home_1_10.fromTo($('.contenido .home .led3 .center'), .5, { opacity: 0, scaleX: 0, scaleY: 0, ease: Back.easeOut}, { delay: 1, opacity: 1, scaleX: 1, scaleY: 1, ease: Back.easeOut});
    home_1_11.fromTo($('.contenido .home .led3 .right'), .5, { opacity: 0, right: -400, ease: Power2.easeOut}, { delay: .5, opacity: 1, right: 0, ease: Power2.easeOut});
    home_1_11.fromTo($('.contenido .home .led3 .right .izq'), .25, { opacity: 0, scaleX: 0, scaleY: 0, ease: Power2.easeOut}, { delay: .5, opacity: 1, scaleX: 1, scaleY: 1, ease: Power2.easeOut});
    home_1_11.fromTo($('.contenido .home .led3 .right .der'), .25, { opacity: 0, scaleX: 0, scaleY: 0, ease: Power2.easeOut}, { opacity: 1, scaleX: 1, scaleY: 1, ease: Power2.easeOut});

    //HOME LED4
    home_1_12.fromTo($('.contenido .home .led4'), .5, { opacity: 0, top: 170, ease: Back.easeOut}, { opacity: 1, top: 0,  ease: Back.easeOut});
    home_1_12.fromTo($('.contenido .home .led4 .on'), .1, { opacity: 0, ease: Power2.easeOut}, { opacity: .7, ease: Power2.easeOut});
    home_1_12.fromTo($('.contenido .home .led4 .on'), .1, { opacity: .1, ease: Power2.easeOut}, { opacity: .2, ease: Power2.easeOut});
    home_1_12.fromTo($('.contenido .home .led4 .on'), .1, { opacity: .2, ease: Power2.easeOut}, { opacity: .4, ease: Power2.easeOut});
    home_1_12.fromTo($('.contenido .home .led4 .on'), .1, { opacity: .4, ease: Power2.easeOut}, { opacity: .1, ease: Power2.easeOut});
    home_1_12.fromTo($('.contenido .home .led4 .on'), .1, { opacity: .1, ease: Power2.easeOut}, { opacity: .3, ease: Power2.easeOut});
    home_1_12.fromTo($('.contenido .home .led4 .on'), .7, { opacity: .3, ease: Power2.easeOut}, { opacity: 1, ease: Power2.easeOut});
    home_1_12.fromTo($('.contenido .home .led4 .left .table'), .5, { opacity: 0, scaleX: 0, scaleY: 0, ease: Back.easeOut}, { opacity: 1, scaleX: 1, scaleY: 1,  ease: Back.easeOut});
    home_1_12.fromTo($('.contenido .home .led4 .right .table'), .5, { opacity: 0, scaleX: 0, scaleY: 0, ease: Back.easeOut}, { opacity: 1, scaleX: 1, scaleY: 1,  ease: Back.easeOut});
    home_1_12.fromTo($('.contenido .home .led4 .right .legend'), .5, { opacity: 0, ease: Back.easeOut}, { opacity: 1,  ease: Back.easeOut});

    //HOME LED5
    home_1_13.fromTo($('.contenido .home .led5'), .5, { opacity: 0, top: 170, ease: Back.easeOut}, { opacity: 1, top: 0,  ease: Back.easeOut});
    home_1_13.fromTo($('.contenido .home .led5 .on'), .1, { opacity: 0, ease: Power2.easeOut}, { opacity: .7, ease: Power2.easeOut});
    home_1_13.fromTo($('.contenido .home .led5 .on'), .1, { opacity: .1, ease: Power2.easeOut}, { opacity: .2, ease: Power2.easeOut});
    home_1_13.fromTo($('.contenido .home .led5 .on'), .1, { opacity: .2, ease: Power2.easeOut}, { opacity: .4, ease: Power2.easeOut});
    home_1_13.fromTo($('.contenido .home .led5 .on'), .1, { opacity: .4, ease: Power2.easeOut}, { opacity: .1, ease: Power2.easeOut});
    home_1_13.fromTo($('.contenido .home .led5 .on'), .1, { opacity: .1, ease: Power2.easeOut}, { opacity: .3, ease: Power2.easeOut});
    home_1_13.fromTo($('.contenido .home .led5 .on'), .7, { opacity: .3, ease: Power2.easeOut}, { opacity: 1, ease: Power2.easeOut});
    home_1_13.fromTo($('.contenido .home .led5 .cols'), .5, { opacity: 0, ease: Back.easeOut}, { opacity: 1, ease: Back.easeOut});

    var onscroll = false;

    $(window).load(function(){

        if(window.location.hash=='#inicio'){
            $('.contenido .header ul li a.inicio').addClass('active');
        }

        $('.preloader').fadeOut(350, function () {

                home_1_1.play();
                home_auto.play();
                home_auto_ruedas.play();

               if($(window).width()>=980){
                    home_1_1_1.play();
                }

                Focos();

            var waypoint10 = $('section.section').waypoint({
                element: this,
                handler: function(direction) {

                    var ID = this.element.id;

                    if(!activeURL){

                        $(window).on('scroll', function () {
                            onscroll = true;
                        });

                        if(onscroll){
                            window.location.hash = ID;
                            ga('send', 'pageview', {
                                'page': location.pathname + location.search  + location.hash
                            });

                            ga('send','event','Telematica','Menu', window.location.hash.slice(1) );

                            $('.header ul.desktop li a').removeClass('active');
                            $('.header ul.desktop li a.'+this.element.id).addClass('active');


                            if($(window).width()>=980) {
                                if (ID == 'inicio') {

                                    if (!triangleactive) {

                                    } else {
                                        fields.reverse();
                                        triangleactive = false;
                                    }

                                } else {
                                    if (!triangleactive) {
                                        fields.play();
                                        triangleactive = true;
                                    } else {

                                    }
                                }
                            }

                        } else {
                            if($(window).width()>=640){
                                $('.header ul.desktop li a[href="'+ window.location.hash+'"]').click();
                            }
                        }

                    }
                }

            });
        });
        activarModalInicio();
    });

    function activarModalInicio(){
        $('.overlay-component .window').addClass('active');
        $('.overlay-component').addClass('active');
        $('html').css('overflow', 'hidden');
    }

    $('#nombre').alpha({allow: ' '});
    $('#apellidos').alpha({allow: ' '});
    $('#telefono').numeric({allow: ' '});
    $('#num_documento').numeric({allow: ' '});
    $('#email').alphanumeric({allow:".-_@"});

    $('#tipo_documento').change(function() {
        var tipo = $("#tipo_documento option:selected").val();

        switch(tipo){
            case '1':
                $('#num_documento').val('').attr('maxlength', 8);
                break;
            case '2':
                $('#num_documento').val('').attr('maxlength', 12);
                break;
            case '3':
                $('#num_documento').val('').attr('maxlength', 11);
                break;
            case '4':
                $('#num_documento').val('').attr('maxlength', 12);
                break;
        };

    });

    $('.form .btn').click(function(e) {

        e.preventDefault();

        if(activelink==0){

            $('.error-form').hide();

            activelink = 1;

            var $this = $(this);
            var $form = $this.closest("form");

            $data = $form.serialize();
            $captcha = $form.serialize();

            $form.validate();

            switch($("#tipo_documento option:selected").val()){
                case '1':
                    if($('#num_documento').val().length==8){
                        num_length = true;
                    } else {
                        num_length = false;
                    }
                    break;
                case '2':
                    if($('#num_documento').val().length==12){
                        num_length = true;
                    } else {
                        num_length = false;
                    }
                    break;
                case '3':
                    if($('#num_documento').val().length==11){
                        num_length = true;
                    } else {
                        num_length = false;
                    }
                    break;
                case '4':
                    if($('#num_documento').val().length==12){
                        num_length = true;
                    } else {
                        num_length = false;
                    }
                    break;
            }

            /*$.ajax({
                url: 'captcha.php',
                type: 'POST',
                dataType: 'text',
                data: $captcha
            }).done(function (data) {

                if(data=='ok') {*/

            $('.form .btn').addClass('disabled').html('ENVIANDO DATOS');

            if ($form.validate() && num_length && $('#telefono').val().length>=7) {

                $('input[name=num_documento]').css('border', 'solid 1px transparent');

                var token = "eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6IjEyOGUwOTY3YWM2MTUzMDI1ZmU5ODNkNjM3YTYxYmE1YTdiY2ZhOWVmMTg3OGEyOTg3ZDlmYzNhMGEyZjRmOWVjYzM1NmM2ZTYwOWVlNjg2In0.eyJhdWQiOiI5IiwianRpIjoiMTI4ZTA5NjdhYzYxNTMwMjVmZTk4M2Q2MzdhNjFiYTVhN2JjZmE5ZWYxODc4YTI5ODdkOWZjM2EwYTJmNGY5ZWNjMzU2YzZlNjA5ZWU2ODYiLCJpYXQiOjE1MDUzNDQ1MjMsIm5iZiI6MTUwNTM0NDUyMywiZXhwIjoxNTM2ODgwNTIzLCJzdWIiOiIiLCJzY29wZXMiOltdfQ.aNrPjTtQ6l-JGcWT8fN4rsI1zCA9lWzv85RzoHlkdZE_K96wyWGVbYFZdt1QJamIsQVv3kzSON2yUyoOGaRqCbrtzx0QMcIyRS-7Dedm4IPmGMmsFgDZf8Jyxoj6cC66DiYTmrMQQbZKbOBCyiK0shQ8qspkooWvHzSeJgO7PDiwgt8l29otc2IzUgcnSQVc03-qY77whj-0SXyNzdhv4NXLsJEyvH8o-5JkIont3UOiSEylQ7Vow1QzRMxr7u0uXO1nGWaI05pTcobnmowGBy4k8ZmyOT6DmFne-QtoCfPIB0K_SHi6J0garDfdMffDnywAIAa32hHTK70hbRSEy11kQbZrfjvI4f-dPgYyAAr1_37zh_ET3GQnQbEJL8hOXP2UM0iuzDA9MvWfVy7N9HwMjDzcYC8jWhfRiZbTGKmtUbSO4VXk8y9VumVYu10-vPLWboOoXdq7fF_7uDZ0xXVWBgI2osV80dOZ_dZ8GY0FfkmZsVZDaYFpQ0mLHV_8Ar5-AXf8gtXtYLVXWXOiQARlov4metykr46DZrGtz64Y_TTBR0w7stV7LmwpFIy2HrqtYJBj4N_neN9amJ_CfT4vF8l1OE6B3mHMSjgvPHD3EaSJxhisWrWVzYDAb0GD01lKqihJOGadS7d5wP01H_4o6025y36_ecSHb5PHCxo"
                $.ajax({
                    url: "https://web.pacificoseguros.com/canales/servicios/api/solicitudes/vehiculos",
                    type: "POST",
                    data: $data,
                    beforeSend: function (xhr, settings) {
                        xhr.setRequestHeader('Authorization', 'Bearer ' + token);
                    },
                    success: function (data, status) {

                        //grecaptcha.reset();
                        graciasanim.play();
                        activelink = 0;
                        $('.form .btn').removeClass('disabled').html('Envía tus datos');
                        $.scrollTo($('.form'), 500);

                        ga('send','event','Telmatica','Formulario', 'Registro exitoso' );

                        $.ajax({
                            url: 'conversion.php',
                            type: 'POST',
                            dataType: 'text',
                            data: $data
                        }).done(function (data) {

                        });

                    },
                    error: function (jqXHR, exception, response) {
                        $.scrollTo($('.form'), 500);
                        //grecaptcha.reset();
                        $('.form .btn').removeClass('disabled').html('Envía tus datos');
                        activelink = 0;
                        $('.error-form').fadeIn(350);
                    }
                });

            }
            else {

                $form.validate();

                //$('.g-recaptcha').removeClass('border-error');

                //grecaptcha.reset();

                activelink = 0;

                $('.form .btn').removeClass('disabled').html('Envía tus datos');

                if(!num_length){
                    $('input[name=num_documento]').css('border', 'solid 1px #f16b20');
                } else {
                    $('input[name=num_documento]').css('border', 'solid 1px transparent');
                }

            }

                /*} else {

                    $form.validate();

                    $('.g-recaptcha').addClass('border-error');

                    activelink = 0;

                    $('.form .btn').removeClass('disabled').html('Envía tus datos');

                    if(!num_length){
                        $('input[name=num_documento]').css('border', 'solid 1px #f16b20');
                    } else {
                        $('input[name=num_documento]').css('border', 'solid 1px transparent');
                    }

                }

            });*/
        }
    });

    $('.open-popup-link').magnificPopup({
        removalDelay: 300,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass = this.st.el.attr('data-effect');
            },
            open: function() {
                $('.mfp-close ').html('');
            },
        },
        midClick: true
    });

    // Cerrar modal inicial
    $('.overlay-component,.overlay-component .btn-close').on('click', function(){
        $('.overlay-component .window').removeClass('active');
        $('.overlay-component').removeClass('active');
        $('html').removeAttr("style");
    });

    $('.popup-show').click(function (e) {
        e.preventDefault();
        popupshow.play();
    });

    $('.bg-form, .form .close').click(function (e) {
        e.preventDefault();
        popupshow.reverse();
    });

    var waypoint0 = $('#como-funciona').waypoint({
        handler: function(direction) {

            if(direction == 'down'){
                home_1_2.play();
                home_1_3.play();
                home_1_4.play();
                home_1_6.play();
            }else if(direction == 'up'){
                home_1_2.reverse();
                home_1_3.reverse();
                home_1_4.reverse();
                home_1_6.reverse();
            }

        },
        offset: '60%'
    });

    var waypoint4 = $('#como-obtengo-mi-nota').waypoint({
        handler: function(direction) {

            if(direction == 'down'){
                home_1_7.play();
                home_1_7_1.play();
                home_1_7_2.play();
                home_1_8.play();
            }else if(direction == 'up'){
                home_1_7.reverse();
                home_1_7_1.reverse();
                home_1_7_2.reverse();
                home_1_8.reverse();
            }

        },
        offset: '60%'
    });

    var waypoint5 = $('#donde-veo-mi-nota').waypoint({
        handler: function(direction) {

            if(direction == 'down'){
                home_1_9.play();
                home_1_10.play();
                home_1_11.play();

            }else if(direction == 'up'){
                home_1_9.reverse();
                home_1_10.reverse();
                home_1_11.reverse();
            }

        },
        offset: '60%'
    });

    var waypoint6 = $('#cuales-son-los-premios').waypoint({
        handler: function(direction) {

            if(direction == 'down'){
                home_1_12.play();

            }else if(direction == 'up'){
                home_1_12.reverse();

            }

        },
        offset: '60%'
    });

    var waypoint7 = $('#preguntas-frecuentes').waypoint({
        handler: function(direction) {

            if(direction == 'down'){
                home_1_13.play();

            }else if(direction == 'up'){
                home_1_13.reverse();
            }

        },
        offset: '80%'
    });

    $('input[name=terms]').change(function () {
        if ($(this).is(":checked"))
        {
            $('input[name="es_cliente"]').val(1);
        } else {
            $('input[name="es_cliente"]').val(0);
        }
    });

    var currentURL;

    $('.header ul.desktop li a').on('click',function(e) {

        e.preventDefault();

        activeURL = true;

        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') || location.hostname == this.hostname) {

            var target = $(this.hash);

            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            currentURL = this.hash.slice(1);

            $('.header ul.desktop li a').removeClass('active');

            $(this).addClass('active');

            if (target.length) {
                $.scrollTo($($(this).attr('href')), 1000, { onAfter: function(){
                    activeURL = false;
                    window.location.hash = currentURL;

                    ga('send', 'pageview', {
                        'page': location.pathname + location.search  + location.hash
                    });

                    ga('send','event','Telmatica','Menu', currentURL );

                    if(currentURL=='inicio'){
                        if(!triangleactive){

                        } else {
                            fields.reverse();
                            triangleactive = false;
                        }
                    } else {

                        if(!triangleactive){
                            fields.play();
                            triangleactive = true;
                            console.log('3=='+triangleactive);
                        } else {

                        }
                    }

                }});
            }
        }
    });

    if(hash==''|| hash=='#'){
        window.location.hash = '#inicio';
    }

    //triangle.fromTo($('.form .h2 .triangle'), .35, { rotation: 0, ease: Power0.easeNone }, { rotation: 180, ease: Power0.easeNone });

    fields.to($('.form .group'), .35, { height: 0, ease: Power0.easeNone });
    fields_mobile.to($('.form .group'), .35, { height: 457, ease: Power0.easeNone });

    $('.main .header .btn').click(function (e) {
        e.preventDefault();
        if(!triangleactive){
            fields.play();
            triangleactive = true;
            console.log('4=='+triangleactive);
        }else{
            fields.reverse();
            triangleactive = false;
        }
    });

    console.log(triangleactive);

    $('.contenido-mobile .footer .right .img').click(function (e) {
        e.preventDefault();
        $.scrollTo(0, 0);

        if(!triangleactive){

            $('.form .group').css('height', 0);
            $('.form').css('marginTop', 0);
            $('.form').css('opacity', 1);

            fields_mobile.play();
            triangleactive = true;
        }else{

            fields_mobile.reverse();
            triangleactive = false;
        }
    });

    function RotateText(){

        $('.home .text').delay(6000).fadeOut(350, function(){
            $('.home .text2').fadeIn(350, function () {
                $('.home .text2').delay(6000).fadeOut(350, function(){
                    $('.home .text').fadeIn(350, function () {
                        RotateText();
                    })
                });
            });
        });
    }

    RotateText();

    $('.led5 .cols ol li a').each(function(index){
        $(this).click(function (e) {
            e.preventDefault();
            $(this).parent().find('div').fadeToggle( 350, "linear" );
        });
    })

    ;$('.led5 .cols ol li a.enlace').each(function(index){
        $(this).click(function (e) {
            e.preventDefault();
            var href = $(this).attr('href');
            window.open(href,'_blank');
        });
    });


    //Responsive
    $('.header .burger').click(function (e) {
        e.preventDefault();
        $('.header ul.mobile').fadeToggle();
    });

    $('.header ul.mobile li a').click(function () {

        var href = $(this).attr('href').slice(1);

        $.scrollTo($('.contenido-mobile .'+href), 1000);
        $('.header ul.mobile').fadeToggle();
    });

    $('.owl-carousel').owlCarousel({
        items: 1,
        dots: true
    });




});