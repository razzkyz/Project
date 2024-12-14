import '../styles/About.css'
import { FaHtml5 } from "react-icons/fa";
import { MdCss } from "react-icons/md";
import { SiPhp } from "react-icons/si";
import { FaReact } from "react-icons/fa";
import { FaLaravel } from "react-icons/fa";
import { FaGithub } from "react-icons/fa";
import { AiOutlineJavaScript } from "react-icons/ai";
import { RiTailwindCssFill } from "react-icons/ri";
import { FaBootstrap } from "react-icons/fa";
import { FaPython } from "react-icons/fa";
import { DiNodejs } from "react-icons/di";
function About() {
  return (
    <section id='about'>
        <div className='wrapper'>
            <h3>About</h3>
            <p>Perkenalkan nama saya Mochamad Rafly Nurrizky saya bersekolah di smkn 4 padalarang
            alamat rumah saya di cimareme indah dan hobby sehari hari sayang mengulik infomarsi tentang teknologi terbaru
            seputar it atau teknologi lainnya dan selain itu juga hobby saya bermain game.
            </p>
            <p>Saya ahli dalam web development aplikasi development dan juga game development berikut
                bahasa pemograman yang saya kuasai saat ini.
            </p>
            <h4>Programming Language & Tools</h4>  
            <div className='skills'>
                <FaHtml5 />
                <MdCss />
                <SiPhp />
                <FaReact />
                <FaLaravel />
                <FaPython />
                
                
            </div>  
            <div className='skills'>
                
                <FaGithub />
                <AiOutlineJavaScript />
                <RiTailwindCssFill />
                <FaBootstrap />
                <DiNodejs />
            </div>  
        </div>
    </section>
  )
}

export default About
