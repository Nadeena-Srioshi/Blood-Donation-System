/* Name - MODERAGE I U
IT no - IT23834606 */

function requirements(condition) {

    // Change content based on the clicked topic
    if (condition == 'condition1') {
        document.getElementById("elPara1").innerHTML = "A donor with an acute infection can not donate. The reason for antibiotic use must be evaluated to determine if the donor has a bacterial infection that could be transmissible by blood. Acceptable after finishing oral antibiotics for an infection (bacterial or viral). Can have taken last pill on the date of donation. Antibiotic by injection for an infection acceptable 10 days after last injection. Acceptable if you are taking antibiotics to prevent an infection for the following reasons: acne, chronic prostatitis, peptic ulcer disease, periodontal disease, pre-dental work, rosacea, ulcerative colitis, after a splenectomy, or valvular heart disease. If you have a temperature above 99.5 F, you can not donate.";
        
    } 
    else if (condition == 'condition2') {
        document.getElementById("elPara2").innerHTML = "Individuals on oral contraceptives or using other forms of birth control are eligible to donate.";
    } 
    else if (condition == 'condition3') {
        document.getElementById("elPara3").innerHTML = "Donors with diabetes who take any kind of insulin are eligible to donate as long their diabetes is well controlled. ";
    }
    else if (condition == 'condition4') {
        document.getElementById("elPara4").innerHTML = "You must be at least 17 years old to donate to the general blood supply, or 16 years old with parental/guardian consent, if allowed by state law. Learn more. There is no upper age limit for blood donation as long as you are well with no restrictions or limitations to your activities.";
    }
    else if (condition == 'condition5') {
        document.getElementById("elPara5").innerHTML = "Wait 3 months after a tattoo if the tattoo was applied in a state that does not regulate tattoo facilities. Currently, the only states that DO NOT regulate tattoo facilities are: District of Columbia, Georgia, Idaho, Maryland, Massachusetts, New Hampshire, New York, Pennsylvania, Utah and Wyoming. This requirement is related to concerns about hepatitis. Learn more about hepatitis and blood donation. A tattoo is acceptable if the tattoo was applied by a state-regulated entity using sterile needles and ink that is not reused. Cosmetic tattoos (including microblading of eyebrows only) applied in a licensed establishment in a regulated state using sterile needles and ink that is not reused is acceptable. Discuss your particular situation with the health historian at the time of donation.";
    }
    else if (condition == 'condition6') {
        document.getElementById("elPara6").innerHTML = "Acceptable as long as the instruments used were single-use equipment and disposable (which means both the gun and the earring cassette were disposable). Wait 3 months if a piercing was performed using a reusable gun or any reusable instrument. Wait 3 months if there is any question whether or not the instruments used were single-use equipment. This requirement is related to concerns about hepatitis.";
    }

}


