import poto from '../assets/poto.png'
import { FaInstagram } from "react-icons/fa";
import { FaTiktok } from "react-icons/fa"
import { FaXTwitter } from "react-icons/fa6";
import { FaFacebookF } from "react-icons/fa";
import '../styles/Header.css'
function Header() {
  return (
    <header>

        <div className="header-jumbotron">
        <img src={poto}/>
        <h3>Mochamad Rafly Nurrizky</h3>
        <p>Programmer - Gamer - Researcher</p>
        <div className='socialMedia'>
            <a href=""><FaInstagram /></a>
            <a href=""><FaTiktok /></a>
            <a href=""><FaXTwitter /></a>
            <a href=""><FaFacebookF /></a>

        </div>
        </div>
    </header>      
  )
}

export default Header
