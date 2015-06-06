'use strict';
String.prototype.capitalize = function() {
    var result = '';
    var words = this.split(' ');
    for(var i=0; i<words.length; i++){
        result += words[i].charAt(0).toUpperCase() + words[i].slice(1) + ' ';
    }
    return result.slice(0, -1);
};
$(function(){

    var $form = $('#catalog_form');
    var _TOKEN = $form.find('[name="_token"]').val();
    var trigger = false;

    function getModels(markId){
        $form.find('.car-options').remove();
        $form.find('.car-find').remove();
        $.ajax({
            type: 'post',
            url: '/catalog/models/'+markId,
            dataType:'html',
            data: {
                _token: _TOKEN
            },
            success: function(response){
                if($form.find('.car-models')){
                    $form.find('.car-models').remove();
                }
                $form.find('.car-marks').after(response);
                var mark = $form.find('#car_mark').find('option:selected').text();
                if(!trigger) {
                    history.pushState(null, mark, '/catalog/' + mark.toLowerCase().replace(' ', '_'));
                    trigger = false;
                }
            },
            error: function(e,a,b){
                console.error('Get Models Error!');
                console.log(e);console.log(a);console.log(b);
            }
        });
    }

    function getOptions(modelId){
        $.ajax({
            type: 'post',
            url: '/catalog/options/'+modelId,
            dataType:'html',
            data: {
                _token: _TOKEN
            },
            success: function(response){
                if($form.find('.car-options')){
                    $form.find('.car-options').remove();
                }
                $form.find('.car-models').after(response);
                var mark = $form.find('#car_mark').find('option:selected').text();
                var model = $form.find('#car_model').find('option:selected').text();
                if(!trigger) {
                    history.pushState(null, model, '/catalog/' + mark.toLowerCase().replace(' ', '_') + '/' + model.toLowerCase().replace(' ', '_'));
                    trigger = false;
                }
            },
            error: function(e,a,b){
                console.error('Get Options Error!');
                console.log(e);console.log(a);console.log(b);
            }
        });
    }

    $form.on('change', '#car_mark', function(){
        var $this = $(this);

        if($this.val() != 0){
            getModels($this.val());
        }else{
            $form.find('.car-models').remove();
            $form.find('.car-options').remove();
            $form.find('.car-find').remove();
            if(!trigger) {
                history.pushState(null, 'Каталог автомобилей - Каталог', '/catalog');
                trigger = false;
            }
        }

    });

    $form.on('change', '#car_model', function(){
        var $this = $(this);

        if($this.val() != 0){
            getOptions($this.val());
        }else{
            $form.find('.car-options').remove();
            $form.find('.car-find').remove();
            if(!trigger) {
                history.pushState(null, 'Каталог автомобилей - Каталог', '/catalog');
                trigger = false;
            }
        }

    });

    $form.on('change', '#car_options', function(){
        var $this = $(this);

        $form.find('.car-find').remove();

        if($this.val() != 0){
            var
                mark = $form.find('#car_mark').find('option:selected').text().toLowerCase().replace(' ', '_'),
                model = $form.find('#car_model').find('option:selected').text().toLowerCase().replace(' ', '_'),
                options = $form.find('#car_options').find('option:selected').text().toLowerCase().replace(' ', '_')
            ;
            var buttonHtml = '<div class="col-md-3 car-find"><a class="btn btn-primary" href="'+location.origin+'/catalog/'+mark+'/'+model+'/'+options+'">Найти автомобили</a></div>';
            $form.find('.car-options').after(buttonHtml);
        }

    });

    window.addEventListener('popstate', function(e) {
        var params = location.pathname.split('/');
        for(var i=2; i<params.length; i++){
            params[i] = params[i].replace('_', ' ').capitalize();
        }
        if(params[2]) {
            $form.find('#car_mark').find('option:contains(' + params[2] + ')').attr('selected', 'selected');
            trigger = true;
            $form.find('#car_mark').trigger('change');
        }
        if(params[3]) {
            setTimeout(function(){
                $form.find('#car_model').find('option:contains(' + params[3] + ')').attr('selected', 'selected');
                trigger = true;
                $form.find('#car_model').trigger('change');
            }, 500);
        }


    });


});