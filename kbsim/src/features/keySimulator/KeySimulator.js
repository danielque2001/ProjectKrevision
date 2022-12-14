import React, { useState, useEffect, useRef, Suspense } from 'react';
import { connect, useSelector, useDispatch } from 'react-redux';
import { Howl } from 'howler';
import {
  parseKLE,
  keyDown,
  keyUp,
  setKeyboardColor,
  selectLayout,
  selectLocations,
  selectPressedKeys,
  selectKeyboardStyle,
} from './keySimulatorSlice';
import { keySounds } from './../audioModules/audioModule.js';
import { keynames } from './../keyModules/keycodeMaps.js';
import { keyPresets } from './../keyModules/keyPresets.js';
import { keyboardColors } from './../keyModules/keyboardColors.js';
import { keyBone } from './../keyModules/keyBone.js';
import { keyCodeOf } from './../keyModules/parseModules.js';
import { ToastContainer, toast } from './../toast/toast.js';
import Key from './../key/Key.js';
import store from '../store/store';
import styles from './KeySimulator.module.css';
import axios from 'axios';

const TypingTest = React.lazy(() => import('./../typingTest/TypingTest'));

// initially render a keyboard
store.dispatch(parseKLE(keyPresets[0].kle));
// store.dispatch(parseKLE(keyPresets[Math.floor(Math.random() * (keyPresets.length + 1))].kle));
// intially render the keyboard color
store.dispatch(setKeyboardColor(keyboardColors[0].background));

function KeySimulator({ currentTheme, theme }) {
  // Layout array of keyboard
  const layout = useSelector(selectLayout);
  // x y indices of legends
  const keyLocations = useSelector(selectLocations);
  // pressed keys
  const pressedKeys = useSelector(selectPressedKeys);
  // dimensions of keyboard and border
  const keyboardStyle = useSelector(selectKeyboardStyle);

  const [switchToCart, setSwitchToCart] = useState(28);
  const [presetToCart, setPresetToCart] = useState(61);
  const [boneToCart, setBoneToCart] = useState(31);

  //change default value for a border color
  const [caseLight, setCaseLight] = useState('black');

  //change default value for a glow color
  const [caseGlowLight, setCaseGlowLight] = useState(
    '1px 1px 3px 2px rgb(0, 0, 0)'
  );

  const dispatch = useDispatch();

  const keycontainer = useRef();
  const switchselect = useRef();
  const layoutselect = useRef();
  const caseselect = useRef();
  const caselight = useRef();
  const casebone = useRef();
  const addtocart = useRef();
  const gotocart = useRef();
  const [muted, setMute] = useState(false);
  const [kleValue, setKleValue] = useState();
  // set intial switch to first keysound
  const [switchValue, setSwitchValue] = useState('0');

  // subscriber to switch value. When switchvalue changes, execute this function
  useEffect(() => {
    // preload the sounds
    for (let sound in keySounds[switchValue].press) {
      new Howl({ src: keySounds[switchValue].press[sound], volume: 0 }).play();
    }
    for (let sound in keySounds[switchValue].release) {
      new Howl({
        src: keySounds[switchValue].release[sound],
        volume: 0,
      }).play();
    }
  }, [switchValue]);

  // useEffect (() => {}, []);

  const handleSwitchChange = (e) => {
    setSwitchValue(e.target.value);
    switchselect.current.blur();
    keycontainer.current.focus();
    toast.show(`Switch changed to ${keySounds[e.target.value].caption} ??????`, {
      timeout: 3000,
      pause: false,
      delay: 0,
      position: 'bottom-center',
      variant: currentTheme == 'light' ? '' : 'default',
    });

    setSwitchToCart(keySounds[e.target.value].key);
  };

  const handleBoneChange = (e) => {
    setBoneToCart(keyBone[e.target.value].bone);
    dispatch(parseKLE(keyPresets[e.target.value].kle));
  };

  const handleLayoutChange = (e) => {
    dispatch(parseKLE(keyPresets[e.target.value].kle));
    layoutselect.current.blur();
    keycontainer.current.focus();

    setPresetToCart(keyPresets[e.target.value].key);
  };

  const handleCaseChange = (e) => {
    dispatch(setKeyboardColor(keyboardColors[e.target.value].background));
    caseselect.current.blur();
    keycontainer.current.focus();
  };

  const handleAddToCart = (e) => {
    window.location.href =
      'https://www.projectkecommerce.store/add_cart_simulation.php?switch=' +
      switchToCart +
      '&preset=' +
      presetToCart +
      '&bone=' +
      boneToCart;
  };

  const handleGoToCart = (e) => {
    window.location.href = 'https://www.projectkecommerce.store/cart_view.php';
  };

  const toggleMute = () => {
    setMute(!muted);
  };

  const handleKeyDown = (e) => {
    if (
      e.keyCode === 18 ||
      e.keyCode === 112 ||
      e.keyCode === 114 ||
      e.keyCode === 116 ||
      e.keyCode === 117 ||
      e.keyCode === 121 ||
      e.keyCode === 122 ||
      e.keyCode === 123
    ) {
      e.preventDefault();
    }
    // get the array X Y coordinates
    for (let coords in keyLocations[keynames[e.keyCode]]) {
      let action = {
        x: keyLocations[keynames[e.keyCode]][coords][0],
        y: keyLocations[keynames[e.keyCode]][coords][1],
        keycode: e.keyCode,
      };
      dispatch(keyDown(action));
    }
    // if not muted, valid key on keyboard, not pressed already, and selected switch has sounds
    if (
      !muted &&
      keyLocations[keynames[e.keyCode]] &&
      !pressedKeys.includes(e.keyCode) &&
      keySounds[switchValue]
    ) {
      // if the key is a special key (i.e. backspace, space, enter, etc) play a sound
      if (keynames[e.keyCode] in keySounds[switchValue].press) {
        new Howl({
          src: keySounds[switchValue].press[keynames[e.keyCode]],
        }).play();
      }
      // generic key, get the row it's in and play the pitch-adjusted sound
      else {
        switch (parseInt(keyLocations[keynames[e.keyCode]][0][0])) {
          case 0:
            new Howl({ src: [keySounds[switchValue].press.GENERICR0] }).play();
            break;
          case 1:
            new Howl({ src: keySounds[switchValue].press.GENERICR1 }).play();
            break;
          case 2:
            new Howl({ src: keySounds[switchValue].press.GENERICR2 }).play();
            break;
          case 3:
            new Howl({ src: keySounds[switchValue].press.GENERICR3 }).play();
            break;
          case 4:
            new Howl({ src: keySounds[switchValue].press.GENERICR4 }).play();
            break;
          default:
            new Howl({ src: keySounds[switchValue].press.GENERICR4 }).play();
            break;
        }
      }
    }
  };

  // send an action to the reducer to release the key, then play a sound
  const handleKeyUp = (e) => {
    for (let coords in keyLocations[keynames[e.keyCode]]) {
      let action = {
        x: keyLocations[keynames[e.keyCode]][coords][0],
        y: keyLocations[keynames[e.keyCode]][coords][1],
        keycode: e.keyCode,
      };
      dispatch(keyUp(action));
    }
    // if a valid switch is selected
    if (!muted && keyLocations[keynames[e.keyCode]] && keySounds[switchValue]) {
      if (keynames[e.keyCode] in keySounds[switchValue].press) {
        new Howl({
          src: keySounds[switchValue].release[keynames[e.keyCode]],
        }).play();
      } else {
        new Howl({ src: keySounds[switchValue].release.GENERIC }).play();
      }
    }
  };

  // change lighting color
  const handleLightingChange = () => {
    if (caselight.current.value === 'red') {
      setCaseLight('red');
      setCaseGlowLight('1px 1px 3px 2px rgb(255, 99, 71)');
    }

    if (caselight.current.value === 'green') {
      setCaseLight('green');
      setCaseGlowLight('1px 1px 3px 2px rgb(60, 179, 113)');
    }

    if (caselight.current.value === 'blue') {
      setCaseLight('blue');
      setCaseGlowLight('1px 1px 3px 2px rgb(0, 0, 255)');
    }

    if (caselight.current.value === 'pink') {
      setCaseLight('pink');
      setCaseGlowLight('1px 1px 3px 2px rgb(238, 130, 238)');
    }

    if (caselight.current.value === 'skyblue') {
      setCaseLight('skyblue');
      setCaseGlowLight('1px 1px 3px 2px rgb(135, 206, 235)');
    }

    if (caselight.current.value === 'yellow') {
      setCaseLight('yellow');
      setCaseGlowLight('1px 1px 3px 2px rgb(255, 240, 0)');
    }

    if (caselight.current.value === 'black') {
      setCaseLight('black');
      setCaseGlowLight('1px 1px 3px 2px rgb(0, 0, 0)');
    }

    // add condition to added color
    // if (caselight.current.value === 'color') {
    //   setCaseLight('color');
    //   setCaseGlowLight('1px 1px 3px 2px rgb(0, 0, 0)');
    // }
  };

  // called when an individual key detects a mousedown event
  const handleKeyMouseDown = (primaryLegend) => {
    // console.log(keyCodeOf(primaryLegend) + " " + x + " " + y);
    // get the array X Y coordinates
    for (let coords in keyLocations[primaryLegend]) {
      let action = {
        x: keyLocations[primaryLegend][coords][0],
        y: keyLocations[primaryLegend][coords][1],
        keycode: keyCodeOf(primaryLegend),
      };
      dispatch(keyDown(action));
    }
    // if not muted, valid key on keyboard, not pressed already, and selected switch has sounds
    if (
      !muted &&
      keyLocations[primaryLegend] &&
      !pressedKeys.includes(keyCodeOf(primaryLegend)) &&
      keySounds[switchValue]
    ) {
      // if the key is a special key (i.e. backspace, space, enter, etc) play a sound
      if (primaryLegend in keySounds[switchValue].press) {
        new Howl({ src: keySounds[switchValue].press[primaryLegend] }).play();
      }
      // generic key, get the row it's in and play the pitch-adjusted sound
      else {
        switch (parseInt(keyLocations[primaryLegend][0][0])) {
          case 0:
            new Howl({ src: [keySounds[switchValue].press.GENERICR0] }).play();
            break;
          case 1:
            new Howl({ src: keySounds[switchValue].press.GENERICR1 }).play();
            break;
          case 2:
            new Howl({ src: keySounds[switchValue].press.GENERICR2 }).play();
            break;
          case 3:
            new Howl({ src: keySounds[switchValue].press.GENERICR3 }).play();
            break;
          case 4:
            new Howl({ src: keySounds[switchValue].press.GENERICR4 }).play();
            break;
          default:
            new Howl({ src: keySounds[switchValue].press.GENERICR4 }).play();
            break;
        }
      }
    }
  };

  // called when an individual key detects a mouseup event
  const handleKeyMouseUp = (primaryLegend) => {
    for (let coords in keyLocations[primaryLegend]) {
      let action = {
        x: keyLocations[primaryLegend][coords][0],
        y: keyLocations[primaryLegend][coords][1],
        keycode: keyCodeOf(primaryLegend),
      };
      dispatch(keyUp(action));
    }
    // if a valid switch is selected
    if (!muted && keyLocations[primaryLegend] && keySounds[switchValue]) {
      if (primaryLegend in keySounds[switchValue].press) {
        new Howl({ src: keySounds[switchValue].release[primaryLegend] }).play();
      } else {
        new Howl({ src: keySounds[switchValue].release.GENERIC }).play();
      }
    }
  };

  return (
    <div
      className={styles.keywrapper}
      onKeyDown={handleKeyDown}
      onKeyUp={handleKeyUp}
      ref={keycontainer}
      tabIndex='0'
      style={{
        backgroundColor: theme.background,
      }}
    >
      <div className={styles.keycontainer}>
        <Suspense
          fallback={
            <div
              className={styles.typingplaceholder}
              style={{
                borderColor: theme.boxBorder,
              }}
            />
          }
        >
          <TypingTest />
        </Suspense>
        <div
          className={styles.selectcontainer}
          style={{
            borderColor: theme.boxBorder,
          }}
        >
          <div className={styles.selectarea}>
            <div className={styles.selectcol}>
              <div
                className={styles.mechsw}
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                <p>
                  <b>Select Mechanical switches </b>{' '}
                </p>
              </div>
              <select
                className={`${styles.dropdown} ${
                  currentTheme == 'light' ? styles.light : styles.dark
                }`}
                ref={switchselect}
                aria-label='Switch Type'
                onChange={handleSwitchChange}
                defaultValue='0'
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                {keySounds.map((sound, index) => {
                  return (
                    <option value={index} key={sound.key}>
                      {sound.caption}
                    </option>
                  );
                })}
              </select>
            </div>
            <div className={styles.selectcol}>
              <div
                className={styles.mechsw}
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                <p>
                  <b>Select Layout </b>{' '}
                </p>
              </div>
              <select
                className={`${styles.dropdown} ${
                  currentTheme == 'light' ? styles.light : styles.dark
                }`}
                ref={casebone}
                aria-label='Case Bone'
                defaultValue='gray'
                onChange={handleBoneChange}
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                {keyBone.map((bone, index) => {
                  return (
                    <option value={index} key={bone.bone}>
                      {bone.caption}
                    </option>
                  );
                })}
              </select>
            </div>
            <div className={styles.selectcol}>
              <div
                className={styles.mechsw}
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                <p>
                  <b>Select Keycaps</b>{' '}
                </p>
              </div>
              <select
                className={`${styles.dropdown} ${
                  currentTheme == 'light' ? styles.light : styles.dark
                }`}
                ref={layoutselect}
                aria-label='Keyboard Layout'
                onChange={handleLayoutChange}
                defaultValue='0'
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                {keyPresets
                  .filter((preset) => preset.size == boneToCart)
                  .map((preset) => {
                    return (
                      <option value={preset.index} key={preset.key}>
                        {preset.caption}
                      </option>
                    );
                  })}
              </select>
            </div>

            <div className={styles.selectcol}>
              <div
                className={styles.mechsw}
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                <p>
                  <b>Select Color</b>
                </p>
              </div>
              <select
                className={`${styles.dropdown} ${
                  currentTheme == 'light' ? styles.light : styles.dark
                }`}
                ref={caseselect}
                aria-label='Case Color'
                onChange={handleCaseChange}
                defaultValue='gray'
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                {keyboardColors.map((color, index) => {
                  return (
                    <option value={index} key={color.color}>
                      {color.caption}
                    </option>
                  );
                })}
              </select>
            </div>
            <div className={styles.selectcol}>
              <div
                className={styles.mechsw}
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                <p>
                  <b>Select Color Lightings</b>
                </p>
              </div>

              <select
                className={`${styles.dropdown} ${
                  currentTheme == 'light' ? styles.light : styles.dark
                }`}
                ref={caselight}
                aria-label='Case Lighting'
                onChange={handleLightingChange}
                defaultValue='black'
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                <option value='black'>Black</option>
                <option value='red'>Red</option>
                <option value='green'>Green</option>
                <option value='blue'>Blue</option>
                <option value='pink'>Pink</option>
                <option value='skyblue'>Skyblue</option>
                <option value='yellow'>Yellow</option>
                {/* ifyou want to add collor */}
              </select>
            </div>

            <div
              className={styles.mutecol}
              style={{
                color: theme.text,
              }}
            >
              <label className={styles.mutebox}>
                <span className={styles.checkMark}></span>
              </label>
            </div>
          </div>
          <center>
            <div className={styles.selectcol}>
              <button
                className={`${styles.btn} ${
                  currentTheme == 'light' ? styles.light : styles.dark
                }`}
                ref={addtocart}
                aria-label='Add Cart'
                onClick={handleAddToCart}
                defaultValue='gray'
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                Add to Cart
              </button>
            </div>
            <div className={styles.selectcol}>
              <button
                className={`${styles.btn} ${
                  currentTheme == 'light' ? styles.light : styles.dark
                }`}
                ref={gotocart}
                aria-label='Go Cart'
                onClick={handleGoToCart}
                defaultValue='gray'
                style={{
                  backgroundColor: theme.background,
                  color: theme.dropText,
                }}
              >
                Go to Cart
              </button>
            </div>
          </center>
        </div>
        <div className={styles.keyboard} style={keyboardStyle}>
          {layout.map((row, index) => {
            return (
              <div className={styles.keyrow} key={index}>
                {row.map((key) => {
                  return (
                    <Key
                      key={key.keyid}
                      className={key.class}
                      legend={key.legend}
                      sublegend={key.sublegend}
                      width={key.width}
                      height={key.height}
                      x={key.x}
                      y={key.y}
                      keytopcolor={key.keytopcolor}
                      keybordercolor={caseLight}
                      keyborlight={caseGlowLight}
                      textcolor={key.textcolor}
                      pressed={key.pressed}
                      mouseDown={handleKeyMouseDown}
                      mouseUp={handleKeyMouseUp}
                    />
                  );
                })}
              </div>
            );
          })}
        </div>
        <ToastContainer />
      </div>
    </div>
  );
}

const mapStateToProps = (state) => {
  return {
    currentTheme: state.themeProvider.current,
    theme: state.themeProvider.theme,
  };
};

export default connect(mapStateToProps)(KeySimulator);
