
$( document ).ready(function() {
    let titleLen = 140

    let error = {title:false, content:false}

    $('#title-input').on('focus', (event)=>{
        $(event.currentTarget).attr('placeholder', '');
        $('.focus-input').css('display', 'flex');
    })

    $('#title-input').on('blur', (event)=>{
        if($('#title-input').val().length < 1){
            $(event.currentTarget).attr('placeholder', 'หัวข้อกระทู้');
            $('.focus-input').css('display', 'none');
        }
    })

    $('#title-input').keyup(function (e) { 
        let title = $('#title-input').val()
        console.log($('#title-input').val().length);
        $('#numberCharTitle').text(140 - title.length);
        let CheckHTML = /<\/?[^>]+(>|$)/.test(title)

        if((140 - title.length) > 136 || title.length > 140){
            $('#icon-title').hide()
            $('#numberCharTitle').css('color', 'red');
            $('#title-input').css('color', 'red');
            $('#title-invalid').text(`ชื่อกระทู้ต้องยาว 4–140 ตัวอักษร ${CheckHTML ? 'และกระทู้ไม่อนุญาตใส่ HTML':''}`)
            error.title = false
        }else{
            if(CheckHTML){
                $('#icon-title').hide()
                $('#title-invalid').text(`กระทู้ไม่อนุญาตใส่ HTML`)
                $('#numberCharTitle').css('color', 'red');
                $('#title-input').css('color', 'red');
                error.title = false
            }else{
                $('#icon-title').show()
                $('#numberCharTitle').css('color', 'green');
                $('#title-input').css('color', '#F37A01');
                $('#title-invalid').text('')
                error.title = true
            }
        }

        if(error.title && error.content){
            $('#submit').prop('disabled', false);
        }else{
            $('#submit').prop('disabled', true);
        }

        console.log(error);
    });


    
    
    $('#content').on('focus', (event)=>{
        $(event.currentTarget).attr('placeholder', '');
        $('.focus-input-content').css('display', 'flex');
    })
    
    $('#content').on('blur', (event)=>{
        if($('#content').val().length < 1){
            $(event.currentTarget).attr('placeholder', 'เนื้อหากระทู้');
            $('.focus-input-content').css('display', 'none');
        }
    })

    $('#content').keyup(function (e) { 
        let content = $('#content').val()
        console.log($('#content').val().length);
        $('#numberCharContent').text(2000  - content.length);

        if((2000  - content.length) > 1994 || content.length > 2000 ){
            $('#icon-content').hide()
            $('#numberCharContent').css('color', 'red');
            $('#content').css('color', 'red');
            $('#content-invalid').text(`ชื่อกระทู้ต้องยาว 4–140 ตัวอักษร`)
            error.content = false
        }else{
                $('#content').css('color', '#000');
                $('#icon-content').show()
                $('#numberCharContent').css('color', 'green');
                $('#content-invalid').text('')
                error.content = true
                
        }
        if(error.title && error.content){
            $('#submit').prop('disabled', false);
        }else{
            $('#submit').prop('disabled', true)
        }
        console.log(error);
    });

    $('#author').on('focus', (event)=>{
        $(event.currentTarget).attr('placeholder', '');
        $('#label-author').css('display', 'flex');
    })
    
    $('#author').on('blur', (event)=>{
        if($('#author').val().length < 1){
            $(event.currentTarget).attr('placeholder', 'ผู้เขียน');
            $('#label-author').css('display', 'none');
        }
    })
})