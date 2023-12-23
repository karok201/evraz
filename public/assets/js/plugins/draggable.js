$('#sortable-items').sortable({
    handle: 'list',
    invertSwap: true,
    animation: 200,
    ghostClass: 'ghost',
    onSort: reportActivity
});

function reportActivity() {
    console.log('The sort order has changed');
}

$('#items-2').sortable({
    group: 'list',
    animation: 200,
    ghostClass: 'ghost',
    onSort: reportActivity,
});
