const tab_list = document.querySelectorAll('.tab-list');
const button_text = document.querySelector('.add-product');
export function switchingTabs(
  TabName,
  TabButtonName,
  SwitchTabName1,
  SwitchTabName2,
  ButtonName1,
  ButtonName2,
  hideButton,
  functiona_name_1,
  functiona_name_2
) {
  let isFunctionCalled = false;

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
          if (!isFunctionCalled) {
            functiona_name_1(); // Call the function for Tab 1
            isFunctionCalled = true;
          }
          isFunctionCalled = true;
        } else if (tab.textContent === SwitchTabName2) {
          TabName[0].classList.remove('active');
          TabName[1].classList.add('active');

          if (hideButton) {
            TabButtonName.classList.add('hide');
          } else {
            TabButtonName.innerHTML =
              '<i class="fa-solid fa-plus"></i> ' + ButtonName2;
          }

          // Reset the modal state (hide previous modal)
          isFunctionCalled = false;

          functiona_name_2(); // Call the function for Tab 2
        }
      }
    });
  });

  if (!isFunctionCalled) {
    functiona_name_1();
    isFunctionCalled = true;
  }
}

export function modalContent(modalID, modalButton, modalClose) {
  $(document).ready(function () {
    // Get the modal
    var modal = $(modalID);

    // Get the button that opens the modal
    var btn = $(modalButton);

    // Get the <span> element that closes the modal
    var span = $(modalClose);

    // When the user clicks the button, open the modal
    btn.click(function () {
      modal.show();
    });

    // When the user clicks on <span> (x), close the modal
    span.click(function () {
      modal.hide();
    });

    // When the user clicks anywhere outside of the modal, close it
    $(window).click(function (event) {
      if ($(event.target).is(modal)) {
        modal.hide();
      }
    });

    // Optionally, close any open modal when a new modal is triggered
    $(document).on('click', '.tab-list', function () {
      // Close any open modal when a new tab is clicked
      $('.modal').hide(); // Make sure to target the correct class for your modals
    });
  });
}
