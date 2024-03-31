import * as React from "react";
import {Link} from "@nextui-org/react";

const Footer = () => {
  return (
    <footer className="py-12 text-center text-default-500">
      © {new Date().getFullYear()}, aivesoft
      <div>
        <Link href="/privacy-policy" className="text-default-500 py-4">
          Privacy Policy
        </Link>
      </div>
    </footer>
  );
};

export default Footer;
