//date
$(document).ready(function(){
    var ySelect = $('#joinBox #birthYear');
    var mSelect = $('#joinBox #birthMonth');
    var dSelect = $('#joinBox #birthDate');
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

