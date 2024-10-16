// function sandasi(type, volume){
//        let final = ['A+', 'A-', 'B+', 'B-', 'O+', 'O-', 'AB+', 'AB-'][''];
//        type.foreach(
//        function(element, index){
//               if(element == 'A+'){
//                      final[0][0] = volume[index];
//               }
//               else if(element == 'A+'){
//                      final[1][0]
//               }
//        }
//     )
// }

function sandasi(type, volume) {
       // Initialize the final array with blood types and initial volumes set to 0
       let final = [
           ['A+', 0], ['A-', 0], 
           ['B+', 0], ['B-', 0], 
           ['O+', 0], ['O-', 0], 
           ['AB+', 0], ['AB-', 0]
       ];
   
       type.forEach(function (element, index) {
           final.forEach(function (bloodType, i) {
               if (bloodType[0] === element) {
                   final[i][1] += volume[index];  // Add the volume for the matching blood type
               }
           });
       });
   
       return final;
   }