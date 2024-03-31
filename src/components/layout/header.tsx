import * as React from "react";
import {useRef, useState} from "react";
import {useRecoilState} from "recoil";
import {themeState} from "@/src/stores/theme";
import {Player} from "@lottiefiles/react-lottie-player";
import {cn, Image, Link, Navbar, NavbarBrand, NavbarContent, NavbarItem} from "@nextui-org/react";
import {Icon} from "@iconify/react";
import {graphql, useStaticQuery} from "gatsby";
import logo from "@/src/assets/images/logo_transparent.png";

const Header = ({data}: any) => {
  const [appTheme, setAppTheme] = useRecoilState(themeState);
  const sun = useRef<Player>();
  const [showSearch, setShowSearch] = useState(false);
    const {site} = useStaticQuery(
        graphql`
            query {
                site {
                    siteMetadata {
                        title
                        description
                        email
                        social {
                            twitter
                        }
                    }
                }
            }
        `
    );

  return (
      <>
        <Navbar
            position="sticky"
            isBordered
            maxWidth="md"
            classNames={{
              base: 'bg-default-50 border-b-1 border-default-200/50',
              item: 'data-[active=true]:text-primary',
            }}
            height="36px"
        >
          <NavbarBrand
              className={cn('', {
                hidden: showSearch,
              })}
          >
            <Link href={`mailto:${site?.siteMetadata?.email}`} target="_blank" className="flex gap-2 text-default-500">
              <span className="bg-sky-400 min-w-0 w-6 h-6 rounded-full flex items-center justify-center">
                <Icon
                    className="text-white"
                    icon={`mdi:email`}
                    width={16}
                />
              </span>
              {site?.siteMetadata?.email}
            </Link>
          </NavbarBrand>

          <NavbarContent
              className={cn('hidden grow sm:flex', {
                flex: showSearch,
              })}
              justify="center"
          >
            <NavbarItem className="grow">
              <form
                  onSubmit={(e) => {
                    e.preventDefault();
                    // router.push(`/search?q=${searchQuery}`);
                  }}
              >

              </form>
            </NavbarItem>
          </NavbarContent>
          {/* Right Menu */}
          <NavbarContent className="grow gap-2" justify="end">
            <NavbarItem>
              <Link href="https://www.facebook.com/aivesoft" target="_blank" className="bg-blue-400 min-w-0 w-6 h-6 rounded-full flex items-center justify-center">
                <Icon
                    className="text-white"
                    icon={`mdi:facebook`}
                    width={16}
                />
              </Link>
            </NavbarItem>
            <NavbarItem>
              <Link href="https://twitter.com/aivesoft" target="_blank" className="bg-sky-400 min-w-0 w-6 h-6 rounded-full flex items-center justify-center">
                <Icon
                    className="text-white"
                    icon={`mdi:twitter`}
                    width={16}
                />
              </Link>
            </NavbarItem>
            <NavbarItem>
              <Link href="https://www.youtube.com/channel/UClWGWvXyZemg5qWkd2v3fJA" target="_blank" className="bg-red-400 min-w-0 w-6 h-6 rounded-full flex items-center justify-center">
                <Icon
                    className="text-white"
                    icon={`mdi:youtube`}
                    width={16}
                />
              </Link>
            </NavbarItem>
            <NavbarItem>
              <Link href="https://github.com/aivesoft" target="_blank" className="bg-default-500 min-w-0 w-6 h-6 rounded-full flex items-center justify-center">
                <Icon
                    className="text-white"
                    icon={`mdi:github`}
                    width={16}
                />
              </Link>
            </NavbarItem>
          </NavbarContent>
        </Navbar>
        <div className="flex justify-center py-12">
          <Link href="/">
            <Image src={logo} alt='' className="w-80"/>
          </Link>
        </div>
        <div className="flex justify-center gap-6 border-t-1 border-b-1 border-default-100">
          <Link href="/about" className="text-default-500 py-4">
            About
          </Link>
        </div>
      </>
  );
};

export default Header;
