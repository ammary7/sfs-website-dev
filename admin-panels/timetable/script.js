const listEl = document.querySelector('[data-activities]')
const activities = [...document.querySelectorAll('[data-activities] li')]
const cells = [...document.querySelectorAll('[data-cell]')]
// const btn = document.querySelector('[data-btn]')
// const clear = document.querySelector('[data-clear]')

const shuffle = (array) => {
	let a = [...array]
	
	for (let i = a.length - 1; i > 0; i--) {
		const j = Math.floor(Math.random() * (i + 1));
		[a[i], a[j]] = [a[j], a[i]];
	}
	
	return a
}

// const clearTimetable = () => {
// 	cells.forEach((el, i) => {
// 		el.innerHTML = ''
// 	})
	
// 	listEl.style.display = 'grid'
// }

const sortActivities = () => {
	const activitiesList = shuffle(activities)
	
	cells.forEach((el, i) => {
		el.innerHTML = ''
		
		if (i < activities.length) {
			el.innerHTML = `${activitiesList[i].innerHTML}`
		}
	})
	
	listEl.style.display = 'none'
}

sortActivities();

// btn.addEventListener('click', sortActivities)
// clear.addEventListener('click', clearTimetable)