<!-- <html style='background-color: black; color: yellow'> -->
<html>
<head><title>TESZT</title>

    <style>

/* Add a class to the element you want to position */
.tooltip {
  /* Set the position to absolute so that we can position it relative to the cursor */
  position: absolute;
  /* Add some padding and a background color to make the tooltip more visible */
  padding: 10px;
  background-color: rgba(0, 0, 0, 0.8);
  /* Set the color of the text */
  color: white;
  /* Set the font size */
  font-size: 14px;
  /* Hide the element by default */
  display: none;
}

/* Show the element when the cursor is hovering over a specific element */
.hover-element:hover + .tooltip {
  display: block;
}

/* Position the element next to the cursor */
.tooltip::before {
  /* Set the position of the arrow */
  content: "";
  position: absolute;
  /* Add some styling to the arrow */
  border-style: solid;
  border-width: 6px;
  border-color: transparent transparent rgba(0, 0, 0, 0.8) transparent;
}

/* Position the element above the cursor */
.tooltip.above::before {
  top: -12px;
  left: 50%;
  margin-left: -6px;
}

/* Position the element below the cursor */
.tooltip.below::before {
  bottom: -12px;
  left: 50%;
  margin-left: -6px;
}

/* Position the element to the left of the cursor */
.tooltip.left::before {
  top: 50%;
  left: -12px;
  margin-top: -6px;
  border-color: transparent transparent transparent rgba(0, 0, 0, 0.8);
}

/* Position the element to the right of the cursor */
.tooltip.right::before {
  top: 50%;
  right: -12px;
  margin-top: -6px;
  border-color: transparent rgba(0, 0, 0, 0.8) transparent transparent;
}
    </style>

</head>
<body>
<script>


</script>

<!-- Add the tooltip to an element -->
<div class="hover-element">Hover over me
  <div class="tooltip above">This is a tooltip</div>
</div>


</body></html>


