import { Link } from 'react-router-dom';
import { portfoliolist } from '../data/DataPortfolio';
import '../styles/Portfolio.css';

function Portfolio() {
    return (
        <section id="portfolio">
            <div className="wrapper">
                <h3>Portfolio</h3>
                <div className="grid">
                    {
                        portfoliolist.map((item) => {
                            return (
                                <div className="item" key={item.id}>
                                    <Link to={`/portfolio/${item.id}`}><img src={item.image} alt={item.title}/></Link>
                                </div>
                            );
                        })
                    }
                </div>
            </div>
        </section>
    );
}

export default Portfolio;
