  // Add User form submission
  const addUserForm = document.getElementById('add_user');

  addUserForm.addEventListener('submit', function (event) {
    event.preventDefault();

    // Get the form data
    const formData = new FormData(addUserForm);

    // Get the password and confirm password values
    const password = formData.get('password');
    const confirmPassword = formData.get('copassword');

    // Check if the password and confirm password values match
    if (password !== confirmPassword) {
      // Display an error message or handle the validation error
      console.error('Password and Confirm Password do not match');
      return;
    }

    // Send the form data to the server using Axios
    axios.post('/user/saveUserDataHandler', {
      name: formData.get('name'),
      gender: formData.get('gender'),
      dob: formData.get('dob'),
      email: formData.get('email'),
      password: password,
      role: formData.get('role')
    })
    .then(function (response) {
      // Handle the response from the server
      console.log(response.data);
      // Add any necessary success message or redirection logic here
    })
    .catch(function (error) {
      // Handle errors
      console.error(error);
      // Add any necessary error message or error handling logic here
    });
  });

