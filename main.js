document.getElementById('number-1').addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        addValueToInvert()
    }
});

document.getElementById('number-2').addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        addValueToSum()
    }
});

const addValueToInvert = () => {
    let newValue = document.getElementById('number-1')
    if (newValue.value === '') {
        return false
    }
    let textValues = document.getElementById('values')
    textValues.value = textValues.value + " " + newValue.value
    newValue.value = ""
}

const addValueToSum = () => {
    let newValue = document.getElementById('number-2')
    if (newValue.value === '') {
        return false
    }
    let textValues = document.getElementById('values-sum')
    textValues.value = textValues.value + " " + newValue.value
    newValue.value = ""
}