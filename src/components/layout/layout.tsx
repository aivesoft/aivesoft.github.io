import * as React from "react";

const Layout = ({ location, title, children }) => {
  const rootPath = `${__PATH_PREFIX__}/`;
  const isRootPath = location.pathname === rootPath;

  return (
    <main data-is-root-path={isRootPath} className="max-w-screen-md px-6 mx-auto">{children}</main>
  );
};

export default Layout;
