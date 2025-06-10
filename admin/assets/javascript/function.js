const tab_list = document.querySelectorAll('.tab-list');

export function switchingTabs(
  TabName,
  TabButtonName,
  SwitchTabName1,
  SwitchTabName2,
  ButtonName1,
  ButtonName2,
  hideButton
) {
  //add a eventlistener for each tab
  tab_list.forEach((tab) => {
    tab.addEventListener('click', () => {
      //remove class active foreach click
      tab_list.forEach((t) => {
        t.classList.remove('active');
      });

      // add active class to the clicked tab
      tab.classList.add('active');

      // check if the tab contain the "active" class
      if (tab.classList.contains('active')) {
        if (tab.textContent === SwitchTabName1) {
          TabName[1].classList.remove('active');
          TabName[0].classList.add('active');
          TabButtonName.innerHTML =
            '<i class="fa-solid fa-plus"></i> ' + ButtonName1;
          TabButtonName.classList.remove('hide');
        } else if (tab.textContent === SwitchTabName2) {
          TabName[0].classList.remove('active');
          TabName[1].classList.add('active');

          if (hideButton) {
            TabButtonName.classList.add('hide');
          } else {
            TabButtonName.innerHTML =
              '<i class="fa-solid fa-plus"></i> ' + ButtonName2;
          }
        }
      }
    });
  });
}
