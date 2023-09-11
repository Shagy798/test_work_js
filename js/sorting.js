document.addEventListener('DOMContentLoaded', () => {
    const getSort = ({ target }) => {
        const order = (target.dataset.order = -(target.dataset.order || -1));//В зависимости от dataset.order будет происходить смена стрелок "▲" "▼".Переключение если равен -1, то при -(-1) = 1, если -(1) = -1
        const index = [...target.parentNode.cells].indexOf(target);//Присваивает переменной значение нажатой ячейки
        const collator = new Intl.Collator(['en', 'ru'], { numeric: true });//Создаётся сортировщик, который будет сравнивать строки на разных языках и числа
        const comparator = (index, order) => (a, b) => order * collator.compare(
            a.children[index].innerHTML,
            b.children[index].innerHTML
        );
/* 
1) index - соответствует ячейке
2) order - переключатель, для того чтобы менять порядок сортировки: "с начала" или "с конца"
3) a.children целый ряд, меняется взависимости от того сравнения sort: первый b, второй a
4) a.children[index] берет из ряда колонка согласно index (нажатого th),
5) collator.compare - сравнивает столбцы с друг другом
6) На основе отсортированных стобцов, выстариваются все остальные строки в таблицы
*/

        for(const tBody of target.closest('table').tBodies)//цикл для элементов tbody
            tBody.append(...[...tBody.rows].sort(comparator(index, order)));// tBody.rows - все ряды в таблице. Добавляет (несколько) отсортированных узлов или строки в конец

        for(const cell of target.parentNode.cells)//цикл для ячеек
            cell.classList.toggle('sorted', cell === target);//Доваляет ячейки
    };

    document.querySelectorAll('.table_sort thead').forEach(tableTH => tableTH.addEventListener('click', () => getSort(event)));// Все таблицы в которых будет осуществлена сортировка по thead

});



