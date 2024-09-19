import Image from 'next/image';
import styles from './page.module.css'; // Certifique-se de que este caminho está correto

export default function Home() {
  return (
    <div className={styles.page}>
      <header className={styles.header}>
        <div className={styles.logoSpace}>
          <Image
            src="/path-to-your-logo.png" // Substitua com o caminho da sua logo
            alt="Logo"
            height={60}
            width={150}
            priority
          />
        </div>
        <nav>
          <ul className={styles.navButtons}>
            <li><a href="#home">Home</a></li>
            <li><a href="#login">Login</a></li>
            <li><a href="#registro">Registro</a></li>
          </ul>
        </nav>
      </header>

      <main className={styles.main}>
        <h1>SESSÕES DE FILMES</h1>
        <ol>
          <li>
           <code></code>
          </li>
          <li></li>
        </ol>

        <div className={styles.ctas}>
          <a
            className={styles.primary}
            href="https://vercel.com/new?utm_source=create-next-app&utm_medium=appdir-template&utm_campaign=create-next-app"
            target="_blank"
            rel="noopener noreferrer"
          >
           
          </a>
          <a
            href="https://nextjs.org/docs?utm_source=create-next-app&utm_medium=appdir-template&utm_campaign=create-next-app"
            target="_blank"
            rel="noopener noreferrer"
            className={styles.secondary}
          >
            
          </a>
        </div>
      </main>

      <footer className={styles.footer}>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod, nisi vel consectetur interdum, nisl nisi aliquet dolor, vel blandit est eros vitae libero. Integer gravida, elit nec interdum tincidunt, lacus ligula pretium magna, id sagittis odio mi non est.
        </p>
        <div>
          <a
            href="https://nextjs.org/learn?utm_source=create-next-app&utm_medium=appdir-template&utm_campaign=create-next-app"
            target="_blank"
            rel="noopener noreferrer"
          >
       
          </a>
          <a
            href="https://vercel.com/templates?framework=next.js&utm_source=create-next-app&utm_medium=appdir-template&utm_campaign=create-next-app"
            target="_blank"
            rel="noopener noreferrer"
          >  
          </a>
          <a
            href="https://nextjs.org?utm_source=create-next-app&utm_medium=appdir-template&utm_campaign=create-next-app"
            target="_blank"
            rel="noopener noreferrer"
          >
            
           
          </a>
        </div>
      </footer>
    </div>
  );
}
