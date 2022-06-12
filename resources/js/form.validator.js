//(function (App){

console.log('in form');

Form = {}
Form.init = function ()
{
    _this = this;

    this.token = $('input[name=_token]').val();
    this.$firstname = $('#firstname');
    this.$secondname = $('#secondname');
    this.$email = $('#email');
    this.$password = $('#password');
    this.$passconfirm = $('#passconfirm');
    this.$agree = $('#agree')[0];

    this.valid = {
        $firstname : $('#valid-firstname'),
        $secondname : $('#valid-secondname'),
        $email : $('#valid-email'),
        $password : $('#valid-password'),
        $passconfirm : $('#valid-passconfirm'),
        $agree : $('#valid-agree')
    }

    this.client = window.axios.create({baseURL: ``});

    $('#submit').click(function (){
        if (_this.isValid())
        {
            _this.send();
        }
    });

    $('.validation-msg').hide();
    $('#status0').hide();
    $('#status1').hide();
}

Form.isValid = function ()
{
    let valid = true;

    if (this.$firstname.val().length < 2) {
        valid = false;
        this.valid.$firstname.show()
    } else this.valid.$firstname.hide();

    if (this.$secondname.val().length < 2) {
        valid = false;
        this.valid.$secondname.show();
    } else this.valid.$secondname.hide();

    if (this.$email.val().match(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/) === null) {
        valid = false;
        this.valid.$email.show()
    } else this.valid.$email.hide();

    if (this.$password.val().length < 8) {
        valid = false;
        this.valid.$password.show();
    } else this.valid.$password.hide();

    if (this.$password.val() !== this.$passconfirm.val()) {
        valid = false;
        this.valid.$passconfirm.show();
    } else this.valid.$passconfirm.hide();

    if (!this.$agree.checked) {
        valid = false;
        this.valid.$agree.show()
    } else this.valid.$agree.hide();

    return valid;
}

Form.send = function ()
{
    _this = this;
    let data = {
        "_token": this.token,
        'firstname' : this.$firstname.val(),
        'secondname' : this.$secondname.val(),
        'email' : this.$email.val(),
        'password' : this.$password.val(),
        'passconfirm' : this.$passconfirm.val(),
    }

    if (this.$agree.checked)
        data.agree = this.$agree.checked

    return this.client.put(`/api/registration`, data)
        .then((res) => {
            _this.processRes(res.data);
            return res;
        }, function (error) {
            _this.checkErrorsResponse(error.response.data.errors);
            return Promise.reject(error);
        });
}

Form.processRes = function (result)
{
    if (result.status == 1)
    {
        $('#status1').show();
        $('#status1 .alert div').html(result.message);
        $('#formWrappper').hide();

    } else if(result.status == 0) {

        $('#status0').show();
        $('#status0 .alert div').html(result.message);
        $('#formWrappper').hide();
    } else {

    }
}

Form.checkErrorsResponse = function (errors)
{
    if (errors.firstname !== undefined) {
        this.valid.$firstname.show()
    }
    if (errors.secondname !== undefined) {
        this.valid.$secondname.show()
    }
    if (errors.email !== undefined) {
        this.valid.$email.show()
    }
    if (errors.password !== undefined) {
        this.valid.$password.show()
    }
    if (errors.passconfirm !== undefined) {
        this.valid.$passconfirm.show()
    }
    if (errors.agree !== undefined) {
        this.valid.$agree.show()
    }
}
