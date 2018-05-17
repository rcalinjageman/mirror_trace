# mirror_trace
This is a mirror trace task that can be used in Qualtrics surveys.

The easiest way to get started is to import two Qualtrics templates that are provided:
   https://github.com/rcalinjageman/mirror_trace/tree/master/qualtrics_templates

One of these templates shows how to screen participants to make sure they have a compatible browser/mouse.
The other template shows how to use the task, providing each participant with 3 easy or difficult mirror-tracing tasks.

Details on how to use the task are embedded directly in the templates:
* In custom headers, you set Qualtrics to point to the needed javascript
* In each question you set some custom javascript to set the trial number and to record data from javascript back into qualtrics
* In the scripts themselves you can define the trial images, starting and stopping points, etc.

It can seem a bit intimidating at first, but should be doable with a bit of work.

The script can upload screen shots of the users work to a server.  This is turned off by default now.

I will be updating this github project as needed. If you want to complete a project and know that absoultely nothing
will change without you knowing it, fork this project and then set your qualtrics surveys to point to the fork.
