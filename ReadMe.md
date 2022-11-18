<!-- Software Engineering Team Code of Conduct

 
* General rules
1. Follow standard conventions.
2. Keep it simple stupid. Simpler is always better. Reduce complexity as much as possible.
3. Boy scout rule. Leave the code cleaner than you found it.
Always find the root cause. Always look for the root cause of a problem.
Design rules
Keep configurable data at high levels.
Prefer polymorphism to if/else or switch/case. // assignment: code an example
Separate multi-threading code.
Prevent over-configurability.
Use dependency injection. // assignment
Follow the Law of Demeter. A class should know only its direct dependencies.
Understandability tips
Be consistent. If you do something a certain way, do all similar things in the same way.
Use explanatory variables.
$images
$pngImages
$urlsToBeRedirected
Encapsulate boundary conditions. Boundary conditions are hard to keep track of. Put the processing for them in one place.
	If($x == $y && inarray($a,$b) …… ), Else …. Endless
Switch case
 
Avoid logical dependency. Don't write methods that work correctly depending on something else in the same class.
Images::get($type){
if(parse($type)){
Return 5;
}
// else??
}
Avoid negative conditionals.
if( $a!=5 ){
}elseif (!( $a !=7)){
 
}else{
}
 
Names rules
Choose descriptive and unambiguous names.
Make a meaningful distinction.
Use pronounceable names.
Use searchable names.
Repository name: ImagesProcessing
Behaviors: 
Convert
Resize
 
Bad:
ImagesProcessing::CovertImagesFromPngToWebp($image);
 
Good:
ImagesProcessing::Covert($image, $from =’png’ , $to = ‘webp’);
 
 
 
Replace magic numbers with named constants.
Bad:
if($a==5)
 
Good
Const PAGE_SIZE=5;
if($a==PAGE_SIZE)
 
Avoid encodings. Don't append prefixes or type information.
The maximum length for any name is 35 characters.
 
Functions rules
Small; no more than 10 lines of code including the prototype.
Do one thing.
Use descriptive names.
Prefer fewer arguments.
Have no side effects.
Don't use flag arguments. Split the method into several independent methods that can be called from the client without the flag.
Invoices::get($isPaid) ; // true: paid, false: pending
Invoices::getPaid()
 
Invoices::getPending()
 
 
Comments rules
Always try to explain yourself in code.
Don't be redundant.
Don't add obvious noise.
Don't use closing brace comments.
Don’t: 
// 
Do:
/**
This is a trial to do …
*/
Don't comment out code. Just remove.
Use as an explanation of intent.
Use as clarification of code.
Use as a warning of consequences.
Source code structure
Separate concepts vertically.
Related code should appear vertically dense.
Declare variables close to their usage.
Dependent functions should be close.
Similar functions should be close.
Place functions in the downward direction.
Keep lines short.
Don't use horizontal alignment.
Use white space to associate related things and disassociate weakly related.
Don't break indentation.
Objects and data structures
Hide internal structure.
Prefer data structures.
Avoid hybrids structures (half object and half data).
Should be small.
Do one thing.
Small number of instance variables.
Base class should know nothing about their derivatives.
Better to have many functions than to pass some code into a function to select a behavior.
Prefer non-static methods to static methods.
Follow Solid Principles where applicable
Follow PSR-2: Coding Style Guide
 
Backend specifications 
Always validate requests’ parameters.
Response time is no more than 500ms.
Frontend specifications 
Use JS ES6.
Justify usage of any JS framework/library.
Use Sass where applicable.
All images shall be added as webp.
All images shall have proper alt tags and be connected to the backend.
Each CSS and javascript file shall have two versions, a styled version, and a minified version.
Add validations for all forms & data submissions.
Environments and branching model
Must have a local working environment for each solution.
Branching model:
Each software engineer must create a branch from the main/master branch of the software solution.
The branch name must start with the trello ticket id then the task name.
Upon task completion, the software engineer must issue a pull request to the staging or production branch -based on the project-.
The software engineer will assign the pull request to the team lead or a senior software engineer.
The code reviewer must review the pull request within 4 working hours and add comments/questions if needed following the code of conduct and coding best practices.
The software engineer must answer the questions / implement the comments within 1 working hour.
The code reviewer approves the PR.
The software engineer deploys on staging or production -depending on the project specifications-.
Code smells
Rigidity. The software is difficult to change. A small change causes a cascade of subsequent changes.
Fragility. The software breaks in many places due to a single change.
Immobility. You cannot reuse parts of the code in other projects because of the involved risks and high effort.
Needless Complexity.
Needless Repetition.
Opacity. The code is hard to understand.
 -->
# CodeOfConduct
# CodeOfConduct
