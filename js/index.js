let inputCheckObj = {};

$('input[type="checkbox"]').on('click', function () {
  switch ($(this).attr('id')) {
    case 'orchestra':
      if ($(this).is(':checked')) {
        inputCheckObj.category1 = $(this).val();
      } else {
        delete inputCheckObj.category1;
      }
      break;
    case 'wind-orchestra':
      if ($(this).is(':checked')) {
        inputCheckObj.category2 = $(this).val();
      } else {
        delete inputCheckObj.category2;
      }
      break;
    case 'chamber-music-ensemble':
      if ($(this).is(':checked')) {
        inputCheckObj.category3 = $(this).val();
      } else {
        delete inputCheckObj.category3;
      }
      break;
    case 'jazz':
      if ($(this).is(':checked')) {
        inputCheckObj.category4 = $(this).val();
      } else {
        delete inputCheckObj.category4;
      }
      break;
    case 'solo':
      if ($(this).is(':checked')) {
        inputCheckObj.category5 = $(this).val();
      } else {
        delete inputCheckObj.category5;
      }
      break;
    case 'subscribe-mail':
      if ($(this).is(':checked')) {
        inputCheckObj.subscribeMail = $(this).val();
      } else {
        delete inputCheckObj.subscribeMail;
        inputCheckObj.subscribeMail = "受け取らない";
      }
      break;
  }
});