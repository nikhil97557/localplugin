//
// * Javascript
// *
// * @package    ajaxdemo
// * Developer: 2020 Ricoshae Pty Ltd (http://ricoshae.com.au)
//

// require(['core/first','core/templates', 'core/notification','jquery', 'jqueryui', 'core/ajax'], function(core, $, bootstrap, ajax,templates,notification) {

//   // -----------------------------
//   $(document).ready(function() {

//     //  toggle event
//     $('#id_messagetype').change(function() {
//       // get current value then call ajax to get new data
//       ajax.call([{
//         methodname: 'local_testlocal_getajaxtest',
//         args: {
//           'id': 1
//         },
//       }])[0].done(function(response) {
//         // clear out old values
//         console.log("success");
//         return "hii";
//       }).fail(function(err) {
//         console.log(err);
//         //notification.exception(new Error('Failed to load data'));
//         return;
//       });

//     });
//   });
//         //  toggle event
//         function testajax() {
//           // get current value then call ajax to get new data
//           ajax.call([{
//             methodname: 'local_testlocal_getajaxtest',
//             args: {
//               'id': 1
//             },
//           }])[0].done(function(response) {
//             // clear out old values
//             console.log("success");
//             return "hii";
//           }).fail(function(err) {
//             console.log(err);
//             //notification.exception(new Error('Failed to load data'));
//             return;
//           });
    
//         }
    
   

//   });



  
  // define(['jquery', 'core/ajax', 'core/loadingicon'], function($, Ajax, LoadingIcon) {
  //   return {
  //     testajax: function() {
  //       // ajax.call([{
  //       //               methodname: 'local_testlocal_getajaxtest',
  //       //               args: {
  //       //                 'id': 1
  //       //               },
  //       //             }])[0].done(function(response) {
  //       //               // clear out old values
  //       //               console.log("success");
  //       //               return "hii";
  //       //             }).fail(function(err) {
  //       //               console.log(err);
  //       //               //notification.exception(new Error('Failed to load data'));
  //       //               return;
  //       //             });
  //       alert("hii");
  //     }
  //   }

  // });

  // require(['core/ajax', 'core/ajax'], function(ajax) {
  //   return
  //   {
      
//     testajax: function() {
// alert("hii");
// ajax.call([{
//                       methodname: 'local_testlocal_getajaxtest',
//                       args: {
//                         'id': 1
//                       },
//                     }])[0].done(function(response) {
//                       // clear out old values
//                       console.log("success");
//                       return "hii";
//                     }).fail(function(err) {
//                       console.log(err);
//                       //notification.exception(new Error('Failed to load data'));
//                       return;
//                     });
        // alert("hii");
// }
  //   }
  // });

  define(['jquery', 'core/ajax'], function($,Ajax) {

    return {
        testajax: function() {
          alert("hi");
         
        }
      }
      });
