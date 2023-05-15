const barCafeGrid = document.querySelector('.grid')
if(barCafeGrid){
    const grid = new Muuri('.grid', {
        dragEnabled: false,
        layoutOnInit: true,
        layoutOnResize:true,
        horizontal:true
    });

    const allDayBar = document.querySelector('#alldayBar');
    const friendly = document.querySelector('#friendlyBar');
    const eighteenBar = document.querySelector('#eighteenBar');
    const checkBox = document.querySelectorAll('.checkBox')

    checkBox.forEach(function (element,index){
        element.addEventListener('change',function (){
            grid.filter('.item');
            if(friendly.checked && eighteenBar.checked && allDayBar.checked){
                grid.filter('.allday.friendly.eighteen')
            }
            else if(allDayBar.checked && friendly.checked){
                grid.filter('.allday.friendly')
            }
            else if(allDayBar.checked && eighteenBar.checked){
                grid.filter('.allday.eighteen')
            }
            else if(friendly.checked && eighteenBar.checked){
                grid.filter('.friendly.eighteen')
            }

            else if(allDayBar.checked){
                grid.filter('.allday')
            }
            else if(friendly.checked){
                grid.filter('.friendly')
            }
            else if(eighteenBar.checked){
                grid.filter('.eighteen')
            }
            else{
                grid.filter('.item');
            }
        })
    })
}
