
const x = document.querySelector.bind(document)
const xx = document.querySelectorAll.bind(document)

const tabs = xx('.tab-item')
const panes = xx('.tab-pane')

tabs.forEach((tab,index) => {
    const pane = panes[index]
    tab.onclick = function (){
        x('.tab-item.active').classList.remove('active')
        x('.tab-pane.active').classList.remove('active')

        this.classList.add('active') 
        pane.classList.add('active') 
    }
})

const tabSidebars = xx('.tab-sidebar')
const mainContents = xx('.main-content')

tabSidebars.forEach((tabSidebar,index) => {
    const mainContent = mainContents[index]
    tabSidebar.onclick = function (){
        x('.tab-sidebar.active').classList.remove('active')
        x('.main-content.active').classList.remove('active')

        this.classList.add('active') 
        mainContent.classList.add('active') 
    }
})

