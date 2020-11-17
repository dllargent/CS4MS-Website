function toggleActive(item) {
    item.classList.toggle('active')
}

function toggleRowActive(item) {
    toggleActive(item);
    item.parentNode.childNodes.forEach(node => {
        if (node !== item) {
            node.classList?.remove('active')
        }
    })
}
