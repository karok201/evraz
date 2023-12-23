document.addEventListener('DOMContentLoaded', function () {
    let draggedElement = null;

    document.querySelectorAll('.draggable').forEach(function (elem) {
        elem.draggable = true;

        elem.addEventListener('dragstart', function (e) {
            draggedElement = this;
            e.dataTransfer.setData('text/plain', 'dragging');
        });
    });

    document.querySelectorAll('.draggable, .vagon').forEach(function (elem) {
        elem.addEventListener('dragover', function (e) {
            e.preventDefault();
        });

        elem.addEventListener('drop', function (e) {
            e.preventDefault();
            if (draggedElement) {
                const parent = this.parentElement;
                const mouseX = e.clientX;  // Получаем X-координату курсора
                const rect = draggedElement.getBoundingClientRect();
                const center = rect.left + rect.width / 2; // Получаем центр перетаскиваемого элемента

                if (mouseX < center) {
                    // Переставляем влево
                    parent.insertBefore(draggedElement, this);
                } else {
                    // Переставляем вправо
                    parent.insertBefore(draggedElement, this.nextSibling);
                }
                
                draggedElement = null;
            }
        });
    });
});
