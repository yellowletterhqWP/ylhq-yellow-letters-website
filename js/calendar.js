/*   const calendarBody = document.getElementById('calendar-body');
  const monthLabel = document.getElementById('month-label');
  const prevBtn = document.getElementById('prev-month');

  let today = new Date();
  let currentMonth = today.getMonth();
  let currentYear = today.getFullYear();

  function renderCalendar(month, year) {
    const firstDay = new Date(year, month, 1).getDay();
    const daysInMonth = 32 - new Date(year, month, 32).getDate();

    calendarBody.innerHTML = '';

    monthLabel.textContent = new Date(year, month).toLocaleString('default', { month: 'long', year: 'numeric' });

    let date = 1;
    for (let i = 0; i < 6; i++) {
      let row = document.createElement('tr');

      for (let j = 0; j < 7; j++) {
        let cell = document.createElement('td');
        if (i === 0 && j < firstDay) {
          cell.textContent = '';
        } else if (date > daysInMonth) {
          break;
        } else {
          cell.textContent = date;

          if (
            date === today.getDate() &&
            year === today.getFullYear() &&
            month === today.getMonth()
          ) {
            cell.classList.add('today');
          }

          date++;
        }
        row.appendChild(cell);
      }

      calendarBody.appendChild(row);
    }
  }

  renderCalendar(currentMonth, currentYear);
 */