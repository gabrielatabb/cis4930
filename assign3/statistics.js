function findN(list)
{
	return list.length;
}

function findSum(list)
{
	var sum = 0;
	for(var i = 0; i < list.length; i++){
		sum += list[i];
	}
	return sum;
}

function findMean(list)
{
	return findSum(list)/findN(list);	
}

function findMedian(list) {
    let sortedList = list.slice().sort((a, b) => a - b);

    const middle = Math.floor(sortedList.length / 2);

    if (sortedList.length % 2 !== 0) {
        return sortedList[middle];
    }
    
    return (sortedList[middle - 1] + sortedList[middle]) / 2;
}


function findMode(list)
{
    const obj = {};

    list.forEach(number => {
        if (!obj[number]) {
            obj[number] = 1;
        } else {
            obj[number] += 1;
        }
    });

    let highestValue = 0;
    let highestValueKey = null;

    for (let key in obj) {
        const value = obj[key];
        if (value > highestValue) {
            highestValue = value;
            highestValueKey = Number(key);
        }
    }

    return highestValueKey;
}

function findMax(list)
{
	let max = 0;
	
	for(let index = 0; index < list.length; index++){
		if(list[index] > max){
			max = list[index];
		}
	}
	
	return max;
}

function findMin(list)
{
	let min = Infinity;
	
	for(let index = 0; index < list.length; index++){
		if(list[index] < min){
			min = list[index];
		}
	}
	
	return min;
}

function findRange(list)
{
	return findMax(list) - findMin(list);
}

function findInterquartileRange(list) {
    if (list.length < 2) return 0;

    let sortedList = list.slice().sort((a, b) => a - b);

    const median = findMedian(sortedList);

    let lowerHalf = sortedList.filter(x => x < median);
    let upperHalf = sortedList.filter(x => x > median);

    let Q1 = findMedian(lowerHalf);

    let Q3 = findMedian(upperHalf);

    return Q3 - Q1;
}

function findVariance(list) {
    let mean = findMean(list);
    let sumOfSquares = 0;

    for (let i = 0; i < list.length; i++) {
        sumOfSquares += Math.pow(list[i] - mean, 2);
    }

    return sumOfSquares / findN(list);
}

function findStandardDeviation(list) {
    return Math.sqrt(findVariance(list));
}

function findSkewness(list) {
    let n = list.length;
    if (n < 2) return 0;

    let mean = findMean(list);
    let variance = findVariance(list);
    let stdDev = Math.sqrt(variance);

    let skewness = list.reduce((acc, num) => acc + Math.pow(num - mean, 3), 0) / n;
    skewness /= Math.pow(stdDev, 3);

    return skewness;
}

function findKurtosis(list) {
    let n = list.length;
    if (n < 2) return 0;

    let mean = findMean(list);
    let variance = findVariance(list);
    let stdDev = Math.sqrt(variance);

    let kurtosis = list.reduce((acc, num) => acc + Math.pow(num - mean, 4), 0) / n;
    kurtosis /= Math.pow(stdDev, 4);

    return kurtosis;
}















