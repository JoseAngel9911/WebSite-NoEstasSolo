const mm = document.querySelector('#mm');
const pass = document.querySelector('#pass');


mm.addEventListener('click', ()=>{

    if(pass.type=='password'){
    
        pass.type = 'text';
    }else{
    
        pass.type = 'password';
    
    }
    

})
