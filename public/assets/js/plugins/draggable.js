$('#sortable-items').sortable({
    handle: 'list',
    invertSwap: true,
    animation: 200,
    ghostClass: 'ghost',
    onSort: reportActivity
});

function reportActivity(e) {
    console.log(e);
}

$('[id^="items_"]').sortable({
    group: 'list',
    animation: 200,
    multiDrag: true,
    selectedClass: "selected",
    ghostClass: 'ghost',
    onSort: reportActivity,
});
