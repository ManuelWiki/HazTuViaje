const all_seats = document.querySelector('.in-seats-container');

all_seats.addEventListener('click', (e) => {
    const target = e.target;
    if (target.classList.contains('avail-seat'))
        target.classList.toggle('selected-seat');
})