<?php




// ========================== input empty =============================
function input_empty(){
    echo'<!-- Modal -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="background:;color:gray">
        
          <div class="modal-body">
          <center style="color:red;">Please Fill all inputs&nbsp;'. "<i class='bx bx-error'></i> ".'</center>
          </div>
          
        </div>
      </div>
    </div>
    
    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
    <!-- Regular JS to close the modal -->
    <script>
      function closeModal() {
        var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"));
        myModal.hide();
      }
    
      document.addEventListener("DOMContentLoaded", function () {
        var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"), {
          keyboard: false
        });
    
        myModal.show();
    
        // Close the modal after 5 seconds (5000 milliseconds)
        setTimeout(function () {
          myModal.hide();
        }, 3000);
      });
    </script>';
}
// ========================== input empty =============================


// ========================== invalid_email =============================
function invalid_email(){
    echo'<!-- Modal -->
    <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content" style="background:;color:gray">
        
          <div class="modal-body">
          <center style="color:red;">Email is Invalid&nbsp;'. "<i class='bx bx-error'></i> ".'</center>
          </div>
          
        </div>
      </div>
    </div>
    
    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    
    <!-- Regular JS to close the modal -->
    <script>
      function closeModal() {
        var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"));
        myModal.hide();
      }
    
      document.addEventListener("DOMContentLoaded", function () {
        var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"), {
          keyboard: false
        });
    
        myModal.show();
    
        // Close the modal after 5 seconds (5000 milliseconds)
        setTimeout(function () {
          myModal.hide();
        }, 3000);
      });
    </script>';
}
// ========================== invalid_email =============================

// ========================== password_match =============================
function password_match(){
  echo'<!-- Modal -->
  <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background:;color:gray">
      
        <div class="modal-body">
        <center style="color:red;">Password do not match&nbsp;'. "<i class='bx bx-error'></i> ".'</center>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Regular JS to close the modal -->
  <script>
    function closeModal() {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"));
      myModal.hide();
    }
  
    document.addEventListener("DOMContentLoaded", function () {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"), {
        keyboard: false
      });
  
      myModal.show();
  
      // Close the modal after 5 seconds (5000 milliseconds)
      setTimeout(function () {
        myModal.hide();
      }, 3000);
    });
  </script>';
}
// ========================== password_match =============================

// ========================== number taken =============================
function number_taken(){
  echo'<!-- Modal -->
  <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background:;color:gray">
      
        <div class="modal-body">
        <center style="color:red;">Number Taken Use Another&nbsp;'. "<i class='bx bx-error'></i> ".'</center>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Regular JS to close the modal -->
  <script>
    function closeModal() {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"));
      myModal.hide();
    }
  
    document.addEventListener("DOMContentLoaded", function () {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"), {
        keyboard: false
      });
  
      myModal.show();
  
      // Close the modal after 5 seconds (5000 milliseconds)
      setTimeout(function () {
        myModal.hide();
      }, 3000);
    });
  </script>';
}
// ========================== number_taken =============================



// ========================== email taken =============================
function email_taken(){
  echo'<!-- Modal -->
  <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background:;color:gray">
      
        <div class="modal-body">
        <center style="color:red;">Email Taken Use Another&nbsp;'. "<i class='bx bx-error'></i> ".'</center>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Regular JS to close the modal -->
  <script>
    function closeModal() {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"));
      myModal.hide();
    }
  
    document.addEventListener("DOMContentLoaded", function () {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"), {
        keyboard: false
      });
  
      myModal.show();
  
      // Close the modal after 5 seconds (5000 milliseconds)
      setTimeout(function () {
        myModal.hide();
      }, 3000);
    });
  </script>';
}
// ========================== email taken =============================


// ========================== invalid_credentials =============================
function invalid_credentials(){
  echo'<!-- Modal -->
  <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background:;color:gray">
      
        <div class="modal-body">
        <center style="color:red;">Wrong Email or password &nbsp;'. "<i class='bx bx-error'></i> ".'</center>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Regular JS to close the modal -->
  <script>
    function closeModal() {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"));
      myModal.hide();
    }
  
    document.addEventListener("DOMContentLoaded", function () {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"), {
        keyboard: false
      });
  
      myModal.show();
  
      // Close the modal after 5 seconds (5000 milliseconds)
      setTimeout(function () {
        myModal.hide();
      }, 3000);
    });
  </script>';
}

// ========================== invalid_credentials =============================

// ========================== profile_updated =============================
function profile_updated(){
  echo'<!-- Modal -->
  <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background:;color:gray">
      
        <div class="modal-body">
        <center style="color:green;">Profile Updated</center>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Regular JS to close the modal -->
  <script>
    function closeModal() {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"));
      myModal.hide();
    }
  
    document.addEventListener("DOMContentLoaded", function () {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"), {
        keyboard: false
      });
  
      myModal.show();
  
      // Close the modal after 5 seconds (5000 milliseconds)
      setTimeout(function () {
        myModal.hide();
      }, 3000);
    });
  </script>';
}

// ========================== profile_updated =============================


// ========================== song_saved =============================
function song_saved(){
  echo'<!-- Modal -->
  <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background:;color:gray">
      
        <div class="modal-body">
        <center style="color:green;">The song is Saved</center>
        </div>
        
      </div>
    </div>
  </div>
  
  <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  
  <!-- Regular JS to close the modal -->
  <script>
    function closeModal() {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"));
      myModal.hide();
    }
  
    document.addEventListener("DOMContentLoaded", function () {
      var myModal = new bootstrap.Modal(document.getElementById("welcomeModal"), {
        keyboard: false
      });
  
      myModal.show();
  
      // Close the modal after 5 seconds (5000 milliseconds)
      setTimeout(function () {
        myModal.hide();
      }, 3000);
    });
  </script>';
}

// ========================== song_saved =============================

// ================================== you are following popup ===================
function song_saved_pop(){
  echo '<!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-absolute" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Song Saved</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                The song has been saved on your music Server <i class="bx bxs-server"></i>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
 

    <!-- Add JavaScript to trigger the modal on page load -->
    <script>
        $(window).on("load", function() {
            $("#exampleModal").modal("show");
        });
    </script>';

}
// ================================== you are following popup ===================

