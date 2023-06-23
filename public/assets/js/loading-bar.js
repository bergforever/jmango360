const loading = document.querySelector('.loading');
let currentProgress = 0;
let itv = setInterval(function(){
    if(currentProgress < 100){
        const increment = Math.random()*40;
        currentProgress += increment;
        if(currentProgress > 100) currentProgress = 100;
        setProgress(currentProgress);
    }else{
        clearInterval(itv);
        loading.style.opacity = 0;
    }
},800);

function setProgress(progress){
    loading.style.width = `${progress}%`;
}
