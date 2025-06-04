const tab_list = document.querySelectorAll('.tab-list');
const inventory_tabs = document.querySelectorAll('.inventory-section');

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
      if (tab.textContent === 'Product Listed') {
        inventory_tabs[1].classList.remove('active');
        inventory_tabs[0].classList.add('active');
      } else if (tab.textContent === 'Account Listing') {
        inventory_tabs[0].classList.remove('active');
        inventory_tabs[1].classList.add('active');
      }
    }
  });
});
