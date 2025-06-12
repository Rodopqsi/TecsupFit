<button id="button" {{ $attributes->merge(['type' => 'submit', 'class' => 'transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
<style>
    
#button {
  position: relative;
  width: 100%;
  border: 2px solidrgb(53, 0, 107);
  background-color:rgb(41, 0, 82);
  height: 40px;
  color: white;
  font-size: .8em;
  font-weight: 500;
  letter-spacing: 1px;
  border-radius: 30px;
  margin: 10px;
  cursor: pointer;
  overflow: hidden;
}

#button::after {
  content: "";
  position: absolute;
  background-color: rgba(255, 255, 255, 0.253);
  height: 100%;
  width: 150px;
  top: 0;
  left: -200px;
  border-bottom-right-radius: 100px;
  border-top-left-radius: 100px;
  filter: blur(10px);
  transition-duration: .5s;
}

#button:hover::after {
  transform: translateX(600px);
  transition-duration: .5s;
}

</style>