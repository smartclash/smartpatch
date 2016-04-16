<style type="text/css">
  body {
  background-image: linear-gradient(-90deg, #4F4CD6, #BD003C); !important; /*linear-gradient(-90deg, #4F4CD6, #BD003C);*/
  background-size: cover !important;
  }
  .text {
  font-family: 'Montserrat', sans-serif !important;
  }
  body > .grid {
    height: 100%;
  }
  .image {
    margin-top: -100px;
  }
  .column {
    max-width: 450px;
  }
</style>
<div class="ui middle aligned inverted center aligned grid">
  <div class="column">
    <h2 class="ui teal image header">
      <img src="assets/images/logo.png" class="image">
      <div class="content text">
        Log-in to your account
      </div>
    </h2>
    <form class="ui large form" method="post" action="#" name="loginForm">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input text">
            <i class="user icon"></i>
            <input type="text" class="formElement" placeholder="Username or Email" name="loginIdentity" id="loginIdentity" />
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input text">
            <i class="lock icon"></i>
            <input type="password" class="formElement" placeholder="Password" name="loginPassword" id="loginPassword" />
          </div>
        </div>
        <div class="ui fluid large teal submit button" type="submit" value="Login">Login</div>
      </div>

      <div class="ui error message"></div>

    </form>
    <div class="ui horizontal divider">Or</div>
    <h2 class="ui header">
      <div class="content text">Create an account</div>
    </h2>
    <form class="ui large form" method="post" action="#" name="createForm">
      <div class="ui stacked segment">
        <div class="field">
          <div class="ui left icon input text">
            <i class="fa fa-send"></i>
            <input type="text" class="formElement" placeholder="Email" name="createEmail" id="createEmail" required />
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input text">
            <i class="user icon"></i>
            <input type="text" class="formElement" placeholder="Username" name="createUsername" id="createUsername" required />
          </div>
        </div>
        <div class="field">
          <div class="ui left icon input text">
            <i class="lock icon"></i>
            <input type="password" class="formElement" placeholder="Password" name="createPassword" id="createPassword" required />
          </div>
        </div>
        <div class="ui fluid large teal submit button" type="submit" value="Create Account">Sign Up</div>
      </div>

  </div>
</div>
