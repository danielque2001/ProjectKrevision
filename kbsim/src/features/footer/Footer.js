import React, { useState, useEffect, useRef, Suspense } from 'react';
import { connect } from 'react-redux';
import { ReactComponent as GitHub } from './../../assets/images/github.svg';
import { ReactComponent as Discord } from './../../assets/images/discord.svg';
import styles from './Footer.module.css';
import { pricing } from '../keyModules/pricing.js';
import axios from 'axios';

const Footer = ({ currentTheme, theme }) => {
  const [data, setData] = useState([]);

  useEffect(() => {
    axios
      .get('https://www.projectkecommerce.store/fetchData.php')
      .then((response) => {
        //response.data = response.data.filter((i) => pricing.includes(i.id));

        setData(response.data);
      })
      .catch(function (error) {
        console.log(error);
      });
  }, []);

  return (
    <center>
      <div
        className={styles}
        style={{
          backgroundColor: theme.background,
          color: theme.text,
        }}
      >
        <h1>Keyboard Parts available in CUSTOMIZATION</h1>
        <table
          width="auto"
          defaultValue="gray"
          style={{
            backgroundColor: theme.background,
            color: theme.dropText,
          }}
        >
          <thead>
            <tr>
              <th>Name</th>
              <th>Price</th>
            </tr>
          </thead>
          <tbody>
            {data.map((datas) => {
              return (
                <tr key={datas.id}>
                  <>
                    <td>{datas.name}</td>
                    <td key={datas.price}>&#8369; {datas.price}</td>
                  </>
                </tr>
              );
            })}
          </tbody>
        </table>
      </div>
    </center>
  );
};

const mapStateToProps = (state) => {
  return {
    currentTheme: state.themeProvider.current,
    theme: state.themeProvider.theme,
  };
};

export default connect(mapStateToProps)(Footer);
