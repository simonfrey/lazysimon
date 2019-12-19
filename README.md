# lazysimon

Minimal effort 350 byte JavaScript library to lazy load all <img> on your website

Lazy loading the images on your websites is a good idea in 99% of the cases. As all the other lazy load libraries where way to heavy for use case I build lazy-simon.js.

As it is only 350 byte in total size, I now can include it on every website I develop without having to worry about performance impacts. Only upsides here 🤩

The script uses a Intersection Observer for the getting the elements that are currently viewed. To check what browser all support this feature checkout https://caniuse.com/#search=intersectionobserver
