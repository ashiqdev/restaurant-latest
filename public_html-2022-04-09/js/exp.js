const restaurant = {
  timeRange: "15:00-00:00",
};

const sport = {
  date: "1643355000",
};

const extractDateFromTimestamp = (timestamp) => {
  return dayjs.unix(Number(timestamp)).format();
};

// find the start and end time of sport
const getSportSchedule = (date) => {
  const sportAverageTime = 7200; // in second
  const duration = Math.floor(sportAverageTime / (60 * 60)); // in hour
  const matchDate = extractDateFromTimestamp(date);
  const matchFinishDateTime = dayjs(matchDate).add(duration, "hour").format();
  const matchStartDateTime = dayjs(matchDate).format();

  return {
    matchFinishDateTime,
    matchStartDateTime
  };
};

// split the start and end time of restaurant
const getRestaurantSchedule = (time, month, day) => {
  const splittedTime = time.split("-");
  const startHour = splittedTime[0].split(":")[0];
  const startMinute = splittedTime[0].split(":")[1];
  const closeHour = splittedTime[1].split(":")[0];
  const closeMinute = splittedTime[1].split(":")[1];

  // make same the restaurant month with sport month
  const date = dayjs().month(Number(month)).date(Number(day)).format();
  const restaurantStartDateTime = dayjs(date)
    .hour(startHour)
    .minute(startMinute)
    .format();
  const restaurantCloseDateTime = dayjs(date)
    .hour(closeHour === '00' ? 23 :  closeHour)
    .minute(closeHour === '00' ? 59 :  closeMinute)
    .format();

  return {
    restaurantStartDateTime,
    restaurantCloseDateTime,
  };
};
// check if the sport time in includes on restaurant time or not

const isMatchEndBeforeRestaurantClose = ({ match, restaurant }) => {
  // when match finished before the restaurant close
  // and after the restaurant opening time
  const matchFinishesBeforeClose = dayjs(match.matchFinishDateTime).isBefore(
    restaurant.restaurantCloseDateTime
  );
  const matchFinishesAfterOpen = dayjs(match.matchFinishDateTime).isAfter(
    restaurant.restaurantStartDateTime
  );
  const matchStartsAfterOpen = dayjs(match.matchStartDateTime).isAfter(
    restaurant.restaurantStartDateTime
  );
  return matchFinishesBeforeClose && matchFinishesAfterOpen && matchStartsAfterOpen
};

const matchData = getSportSchedule(sport.date);
const restaurantData = getRestaurantSchedule(
  restaurant.timeRange,
  dayjs(matchData.matchFinishDateTime).month(),
  dayjs(matchData.matchFinishDateTime).date()
);

console.log(
  isMatchEndBeforeRestaurantClose({
    match: matchData,
    restaurant: restaurantData,
  })
);