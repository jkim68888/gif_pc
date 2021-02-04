// 우편번호 찾기 화면을 넣을 element
var element_layer = document.getElementById('layer');

function closeDaumPostcode() {
    element_layer.style.display = 'none';
}

function sample2_execDaumPostcode() {
    new daum.Postcode({
        oncomplete: function(data) {
            var addr = '';
            var extraAddr = '';

           
            if (data.userSelectedType === 'R') {
                addr = data.roadAddress;
            } else { 
                addr = data.jibunAddress;
            }

          
            if(data.userSelectedType === 'R'){
               
                if(data.bname !== '' && /[동|로|가]$/g.test(data.bname)){
                    extraAddr += data.bname;
                }
               
                if(data.buildingName !== '' && data.apartment === 'Y'){
                    extraAddr += (extraAddr !== '' ? ', ' + data.buildingName : data.buildingName);
                }
               
                if(extraAddr !== ''){
                    extraAddr = ' (' + extraAddr + ')';
                }
               
            } else {
              

          
            document.getElementById('postNum').value = data.zonecode;
            document.getElementById("addr01").value = addr;
         
            document.getElementById("addr02").focus();

            element_layer.style.display = 'none';
        },
        width : '100%',
        height : '100%',
        maxSuggestItems : 5
    }).embed(element_layer);

    
    element_layer.style.display = 'block';

    initLayerPosition();
}


function initLayerPosition(){
    var width = 300;
    var height = 400;
    var borderWidth = 5; 

  
    element_layer.style.width = width + 'px';
    element_layer.style.height = height + 'px';
    element_layer.style.border = borderWidth + 'px solid';
 
    element_layer.style.left = (((window.innerWidth || document.documentElement.clientWidth) - width)/2 - borderWidth) + 'px';
    element_layer.style.top = (((window.innerHeight || document.documentElement.clientHeight) - height)/2 - borderWidth) + 'px';
}
    
    
    
    
    
    
    
    
    