//date
$(document).ready(function(){
    var ySelect = $('#birthYear');
    var mSelect = $('#birthMonth');
    var dSelect = $('#birthDate');
    var today = new Date(); 
    var y = today.getFullYear();
    var yOutput = ''; 
    var mOutput = '';
    var dOutput = '';
    
    for(var i=y;i>=1900;i--){
        yOutput += '<option>' + i + '</option>';
    }
    
    ySelect.html(yOutput);
    
    for(var i=1;i<=12;i++){
        mOutput += '<option>' + i + '</option>';
    }
    
    mSelect.html(mOutput);
    
    var lastDate = [31,28,31,30,31,30,31,31,30,31,30,31];
   
    mSelect.change(function(){
        dOutput = ''; 
        
        var m = $(this).val() - 1;
        var y2 = ySelect.val();
       
        if((y2 % 4 == 0 && y2 % 100 != 0 ) || y2 % 400 == 0){
            lastDate[1] = 29;   
        }else{
            lastDate[1] = 28; 
        }
        
        for(var i=1;i<=lastDate[m];i++){
            dOutput += '<option>' + i + '</option>';
        }
        
        dSelect.html(dOutput);
    });
    
    ySelect.change(function(){
        mSelect.trigger('change');
    });
    
    mSelect.trigger('change');
});


//alert
$(document).ready(function(){
    $('#nonMemberBox #confirmBtn').click(function(e){
        e.preventDefault();
        
        var name = '#nonMemberBox .nameBox';
        var phone02 = '#nonMemberBox #phone02';
        var phone03 = '#nonMemberBox #phone03';
        var pw = '#nonMemberBox .pwBox';
        
        var nameValue = $(name).val().length;
        var phone02Value = $(phone02).val().length;
        var phone03Value = $(phone03).val().length;
        var pwValue = $(pw).val().length;
        
        if(nameValue != 0 && phone02Value != 0 && phone03Value != 0 && pwValue != 0){
            alert('예매내역이 없습니다.');
            $(name).val('');
            $(phone02).val('');
            $(phone03).val('');
            $(pw).val('');
            
        }else{
            alert('필수입력항목을 모두 작성하여 주십시오.');
        }
    });
});














