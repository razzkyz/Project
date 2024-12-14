import love_01 from '../assets/love_01.png';
import love_02 from '../assets/love_02.png';
import love_03 from '../assets/love_03.png';
import love_04 from '../assets/love_04.png';
import '../styles/Daun.css'
function Daun() {
  return (
    <div>
        <div className="leaves">
          <div className="set">
            <div><img src={love_01} alt="leaf 1" /></div>
            <div><img src={love_02} alt="leaf 2" /></div>
            <div><img src={love_03} alt="leaf 3" /></div>
            <div><img src={love_04} alt="leaf 4" /></div>
            <div><img src={love_01} alt="leaf 1" /></div>
            <div><img src={love_02} alt="leaf 2" /></div>
            <div><img src={love_03} alt="leaf 3" /></div>
            <div><img src={love_04} alt="leaf 4" /></div>
          </div>
        </div>
    </div>
  );
}

export default Daun;
