import * as React from "react";
import { useRecoilState } from "recoil";
import { themeState } from "@/src/stores/theme";
import { AppService } from "@/src/utils/app_service";
import { NextUIProvider } from "@nextui-org/react";
import { navigate } from "gatsby";
import Header from "@/src/components/layout/header";
import Footer from "@/src/components/layout/footer";
import "@/src/styles/globals.css";


const BaseLayout = ({ children, ...props }) => {
  const [theme, setTheme] = useRecoilState(themeState);
  AppService.getInstance();

  // useEffect(() => {
  //   setTheme(localStorage.getItem("theme") ?? light.key);
  // }, []);

  return (
    <NextUIProvider navigate={(path) => navigate(path)}>
      <Header {...props} />
      {children}
      <Footer />
    </NextUIProvider>
  );
};

export default BaseLayout;
