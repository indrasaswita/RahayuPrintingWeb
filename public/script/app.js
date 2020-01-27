
require("angular");
require("angular-route");
require("angular-resource");
require("angular-cookies");

var app = require("./init");
require('./constants/variable')(app);
require('./constants/logoforprint')(app);



//require("./route")(app);

//SERVICES
//require("./services/productservice")(app);

//CONTROLLERS
//require("./controllers/offsetpricing")(app);
require("./controllers/login-modal")(app);
require("./controllers/pages.login")(app);
require("./controllers/pages.dashboard")(app);
require("./controllers/pages.orders.order-index")(app);
require("./controllers/kosts.index")(app);
require("./controllers/kosts.newsales")(app);
//require("./controllers/admin.testblabla")(app);
require("./controllers/admin.customer")(app);
require("./controllers/admin.customer.addnew")(app);

//require("./controllers/viewfile-modal")(app);
//require("./controllers/roles")(app);
//require("./controllers/customers")(app);
//require("./controllers/companies")(app);
//require("./controllers/cities")(app);
//require("./controllers/papershops")(app);
//require("./controllers/papertypes")(app);
//require("./controllers/papers")(app);
//require("./controllers/paperdetails")(app);
//require("./controllers/salesheaders")(app);
//require("./controllers/salesaddresses")(app);
//require("./controllers/salespaymentconfirm")(app);
//require("./controllers/salespayments")(app);
//require("./controllers/order.sales.index")(app); //ALL SALES BY CUSTOMER
//require("./controllers/order.sales.history")(app); //ALL HISTORY BY CUSTOMER
//require("./controllers/order.shop.lists.customer")(app);
//require("./controllers/order.shop.calculation.customer")(app);
require("./controllers/home")(app);
//require("./controllers/uploadfiles")(app);
//require("./controllers/cartcustomer")(app);
//require("./controllers/createheader")(app);
//require("./controllers/trackingcustomer")(app);
//require("./controllers/description")(app);
require("./controllers/main")(app);
require("./controllers/godhands")(app);

require("./controllers/account.profiles")(app);

//ADMIN
//require("./controllers/admincartdetails")(app);

//MY JS
require("./customs/sidebar-affix")(app);
require("./customs/sticky-button")(app);
//require("./customs/dropzone-bootstrap")(app);

/*var Dropzone = require("./customs/dropzone");
require("./customs/dz-custom")(app, Dropzone);
Dropzone.call(this);*/

require("./directives/bootstrap-select-addon")(app);